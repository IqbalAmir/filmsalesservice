<?php
require_once "../model/filmmodel.php";


require "../view/layout/navigation.php";



$_SESSION['LoggedIn']= false;

if (!empty($_POST['email'])) {
    $email = $_POST['email'];
    $_SESSION['email'] = $email;

} else {
    $email = NULL;
    $error = 'Please enter a valid email address';
    echo $error;

}


//$_SESSION['email'] = $email;


if (!empty($_POST['psw'])) {
    $password = $_POST['psw'];

} else {
    $password = NULL;
    $error = 'Please enter a  password';
    echo $error;


}


if ($email != NULL && $password != NULL) {
    checkLogin($email, $password);

}

require "../view/login.php";
?>
