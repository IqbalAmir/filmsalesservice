<?php

include_once "../model/filmmodel.php";
require "../view/layout/navigation.php";
require "../view/register.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if (isset($_POST['register-submit'])) {

        if (!preg_match("/^[a-zA-Z _]*$/", $_POST['name'])) {
            $nameErr = "Name Can Only Contain Letters";
            echo $nameErr;
        } else {
            $name = $_POST['name'];
        }


        if (!is_numeric($_POST['phone'])) {
            $nameErr = "Phone Number Can Only Contain Numbers";
            echo $nameErr;
        } else {
            $phone = $_POST['phone'];
        }


        if (empty($_POST['email'])) {
            $nameErr = "Email is required";
            echo $nameErr;
        } else {
            $email = $_POST['email'];
        }


        if (strlen($_POST['psw']) <= '6') {
            $nameErr = "Password must contain at least 6 characters";
        } else if (!preg_match("#[0-9]+#", $_POST['psw'])) {
            $nameErr = "Your Password Must Contain At Least 1 Number";
            echo $nameErr;
        } else if (!preg_match("#[A-Z]+#", $_POST['psw'])) {
            $NameErr = "Your Password Must Contain At Least 1 Capital Letter!";
            echo $nameErr;
        } else if (($_POST['psw']) !== $_POST['pswrepeat']) {
            $nameErr = "Your Passwords Do Not Match";
            echo $nameErr;
        } else {
            $password = $_POST['psw'];
        }


        if (!preg_match("#[0-9]+#", $_POST['street'])) {
            $nameErr = "Please Enter Your Door Number In The Street Field";
            echo $nameErr;
        } else {
            $street = $_POST['street'];
        }


        if (!ctype_alpha($_POST['city'])) {
            $nameErr = "City Can Only Contain Characters";
            echo $nameErr;
        } else {
            $city = $_POST['city'];
        }


        $postcode = $_POST['postcode'];

        if ($nameErr == null) {
            insertInfo($name, $phone, $email, $street, $city, $postcode, $password);
            header('location: ../controller/login.php');
            exit();
        }

    }

}


?>
