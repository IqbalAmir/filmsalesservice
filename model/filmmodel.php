<?php


function getAllFilms()
{
    $conn = new PDO('mysql:host=localhost;dbname=filmsalesservice', 'u1751546', '03jan98');
    $query = "SELECT * FROM fss_film";
    $resultset = $conn->query($query);
    $films = $resultset->fetchAll();

    return $films;
}


function getFilmDetails($filmId)
{
    $conn = new PDO('mysql:host=localhost;dbname=filmsalesservice', 'u1751546', '03jan98');
    $stmt = $conn->prepare("SELECT fss_film.filmtitle AS title, fss_film.filmdescription AS description, 
                                     fss_film.ratid AS rating, fss_filmpurchase.price AS price
	                                 FROM fss_film
			                         INNER JOIN fss_filmpurchase ON fss_filmpurchase.filmid=fss_film.filmid
									  WHERE fss_film.filmid = :id");
    $stmt->bindValue(':id', $filmId);
    $stmt->execute();
    $film = $stmt->fetch();
    return $film;
}


function insertInfo($name, $phone, $email, $street, $city, $postcode, $password)
{

    $conn = mysqli_connect("localhost", "u1751546", "03jan98", "filmsalesservice");

    $person = "INSERT INTO fss_person (personname, personphone, personemail) VALUES ('$name', '$phone', '$email')";

    $address = "INSERT INTO fss_address (addstreet, addcity, addpostcode) VALUES ('$street', '$city', '$postcode')";
    mysqli_query($conn, $person);
    $getPersonID = mysqli_insert_id($conn);

    mysqli_query($conn, $address);
    $getAddressID = mysqli_insert_id($conn);

//    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
    $pws = "INSERT INTO fss_customer (custid, custregdate, custendreg, custpassword) VALUES ('$getPersonID', current_date, '', '$password')";

    mysqli_query($conn, $pws);

    $custAdd = "INSERT INTO fss_customeraddress (custid,addid) VALUES ('$getPersonID','$getAddressID')";
    mysqli_query($conn, $custAdd);

}

function updateDetails($name, $phone, $email)
{
    $conn = mysqli_connect("localhost", "u1751546", "03jan98", "filmsalesservice");

    $person = "UPDATE fss_person SET personname = '$name', personphone ='$phone', personemail = '$email' WHERE fss_person.personemail = \"{$_SESSION['email']}\"";

    if (mysqli_query($conn, $person))
        echo "Details Updated";
    else
        echo "Not Updated";

}


function updateAddress($street, $city, $postcode)
{
    $conn = mysqli_connect("localhost", "u1751546", "03jan98", "filmsalesservice");

    $address = "UPDATE fss_address SET addstreet = '$street', addcity ='$city', addpostcode = '$postcode' 
    WHERE fss_address.addid = (SELECT addid FROM fss_customeraddress
    JOIN fss_person ON fss_customeraddress.custid = fss_person.personid
    WHERE fss_person.personemail = \"{$_SESSION['email']}\")";

    if (mysqli_query($conn, $address))
        echo "Details Updated";
    else
        echo "Not Updated";

}

function checkLogin($email, $password)
{


    $conn = mysqli_connect("localhost", "u1751546", "03jan98", "filmsalesservice");
    $login = "SELECT personemail, custpassword FROM fss_person JOIN fss_customer
              ON fss_customer.custid = fss_person.personid
              WHERE fss_person.personemail='$email' AND fss_customer.custpassword = '$password'";

    $result = mysqli_query($conn, $login);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['LoggedIn'] = true;
        header('location: ../controller/browse.php');

    } else {
        echo 'Password or Email Address Does Not Match Our Records';
    }


}

function getCustomerName()
{
    if ($_SESSION['LoggedIn'] == false) {
        return "";
    } else {
        $conn = mysqli_connect("localhost", "u1751546", "03jan98", "filmsalesservice");
        $detailQuery = "SELECT personname FROM fss_person WHERE fss_person.personemail = \"{$_SESSION['email']}\"";
        $result = mysqli_query($conn, $detailQuery);
        $row = $result->fetch_assoc();
        return $row['personname'];


    }


}


function getPreviousOrders()
{
    $conn = mysqli_connect("localhost", "u1751546", "03jan98", "filmsalesservice");
    $orderQuery = "SELECT fss_Person.personname, fss_Film.filmtitle, fss_OnlinePayment.payid 
                  FROM fss_Person  
                  JOIN fss_OnlinePayment ON fss_Person.personid=fss_OnlinePayment.custid 
                  JOIN fss_FilmPurchase ON fss_FilmPurchase.payid = fss_OnlinePayment.payid 
                  JOIN fss_Film ON fss_Film.filmid = fss_FilmPurchase.filmid 
                  WHERE fss_Person.personemail=\"{$_SESSION['email']}\"";
    $result = mysqli_query($conn, $orderQuery);

    while ($rows = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $rows['filmtitle'] . "</td>";
        echo "<td>" . $rows['payid'] . "</td>";
        echo "</tr>";
    }

}

function getNumOrders()
{
    $conn = mysqli_connect("localhost", "u1751546", "03jan98", "filmsalesservice");
    $numQuery = "SELECT COUNT(fss_FilmPurchase.filmid) as TotalFilms, fss_Person.personname 
                 FROM fss_Person 
                 JOIN fss_OnlinePayment ON fss_Person.personid=fss_OnlinePayment.custid 
                 JOIN fss_FilmPurchase ON fss_FilmPurchase.payid = fss_OnlinePayment.payid 
                 WHERE fss_Person.personemail=\"{$_SESSION['email']}\"";
    $result = mysqli_query($conn, $numQuery);
    $row = $result->fetch_assoc();
    return $row['TotalFilms'];

}

function getCustomerDetails()
{
    $conn = mysqli_connect("localhost", "u1751546", "03jan98", "filmsalesservice");
    $detailsQuery = "SELECT fss_person.personname AS Name, fss_person.personphone AS Phone,fss_person.personemail AS Email,
                     fss_address.addstreet AS Street, fss_address.addcity AS City, fss_address.addpostcode AS Postcode,
                     fss_customer.custpassword AS Password
                     FROM fss_person
                     JOIN fss_customer ON fss_customer.custid = fss_person.personid
                     JOIN fss_customeraddress ON fss_person.personid = fss_customeraddress.custid
                     JOIN fss_address ON fss_customeraddress.addid = fss_address.addid
                     WHERE fss_Person.personemail=\"{$_SESSION['email']}\"";

    $detailResults = mysqli_query($conn, $detailsQuery);
    while ($rows = mysqli_fetch_array($detailResults)) {

        echo "<tr>";
        echo "<td>" . $rows['Name'] . "</td>";
        echo "<td>" . $rows['Phone'] . "</td>";
        echo "<td>" . $rows['Email'] . "</td>";
        echo "<td>" . $rows['Street'] . "</td>";
        echo "<td>" . $rows['City'] . "</td>";
        echo "<td>" . $rows['Postcode'] . "</td>";
        echo "</tr>";

    }
}


    function resetPassword($password)
    {
        $conn = mysqli_connect("localhost", "u1751546", "03jan98", "filmsalesservice");

        $password = "UPDATE fss_customer SET custpassword = '$password'
    WHERE fss_customer.custid = (SELECT custid FROM fss_customer
    JOIN fss_person ON fss_customer.custid = fss_person.personid
    WHERE fss_person.personemail =\"{$_SESSION['email']}\"";

        if (mysqli_query($conn, $password))
            echo "Details Updated";
        else
            echo "Not Updated";


}


?>