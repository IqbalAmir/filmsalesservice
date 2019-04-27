<?php

include_once "../model/filmmodel.php";
require "../view/layout/navigation.php";
require "../view/account/updatedetails.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['update-details'])) {

        $error='';


        if (!preg_match("/^[a-zA-Z _]*$/", $_POST['name'])) {
            $error = "Name Can Only Contain Letters";
            echo $error;
        } else {
            $name = $_POST['name'];
        }


        if (!is_numeric($_POST['phone'])) {
            $error = "Phone Number Can Only Contain Numbers";
            echo $error;
        } else {
            $phone = $_POST['phone'];
        }


        $email = $_POST['email'];


        if ($error == null) {
            updateDetails($name, $phone, $email);
            header("Location: ../controller/updatedetails.php");
            exit();
        }
    }

}
