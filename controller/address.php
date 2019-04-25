<?php

include_once "../model/filmmodel.php";
require "../view/layout/navigation.php";
require "../view/account/address.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['update-address'])) {


        if (!preg_match("#[0-9]+#", $_POST['street'])) {
            $error = "Please Enter Your Door Number In The Street Field";
            echo $error;
        } else {
            $street = $_POST['street'];
        }


        if (!ctype_alnum($_POST['city'])) {
            $error = "City Can Only Contain Characters";
            echo $error;
        } else {
            $city = $_POST['city'];
        }


        $postcode = $_POST['postcode'];

        if ($error == null) {
            updateAddress($street, $city, $postcode);
            header('location: ../controller/accountdetails.php');
            exit();
        }


    }
}

