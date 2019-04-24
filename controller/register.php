<?php

include_once "../model/filmmodel.php";
require "../view/layout/navigation.php";
require "../view/register.php";
require "../controller/validation.php";


if (isset($_POST['register-submit'])) {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['psw'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $postcode = $_POST['postcode'];
    insertInfo($name, $phone, $email, $street, $city, $postcode, $password);


    header('location: ../controller/login.php');
    exit();
}



if ($_SERVER["REQUEST_METHOD"]=="POST"){

}












?>
