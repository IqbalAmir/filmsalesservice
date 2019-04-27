<?php

include_once "../model/filmmodel.php";
require "../view/layout/navigation.php";
require "../view/account/resetpassword.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if (isset($_POST['reset-password'])) {

        $error ='';


        if (strlen($_POST['psw']) <= '6') {
            $error = "Password must contain at least 6 characters";
        } else if (!preg_match("#[0-9]+#", $_POST['psw'])) {
            $error = "Your Password Must Contain At Least 1 Number";
            echo $error;
        } else if (!preg_match("#[A-Z]+#", $_POST['psw'])) {
            $error = "Your Password Must Contain At Least 1 Capital Letter!";
            echo $error;
        } else if (($_POST['psw']) !== $_POST['pswrepeat']) {
            $error = "Your Passwords Do Not Match";
            echo $error;
        } else {
            $password = $_POST['psw'];

        }
        if ($error == NULL) {
            resetPassword($password);
            exit();
        }



    }




}