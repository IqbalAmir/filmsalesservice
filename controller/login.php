<?php
require_once "../model/filmmodel.php";


require "../view/layout/navigation.php";

$_SESSION['LoggedIn'] = false;


if (isset($_POST['login-submit'])) {



    if (!empty($_POST['email'])) {
        $email = $_POST['email'];
        $_SESSION['email'] = $email;

    } else {
        $email = NULL;
        $error = 'Please Enter an Email Address,';
        echo $error;

    }


//$_SESSION['email'] = $email;


    if (!empty($_POST['psw'])) {
        $password = $_POST['psw'];

    } else {
        $password = NULL;
        $error = 'Please Enter a Password';
        echo $error;


    }


    if ($email != NULL && $password != NULL) {
        checkLogin($email, $password);

    }
}

require "../view/login.php";
?>
