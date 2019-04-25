<?php

include_once "../model/filmmodel.php";
require "../view/layout/navigation.php";
require "../view/account/updatedetails.php";




if (isset($_POST['update-details'])) {
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
updateDetails($name,$phone,$email);

    header('location: ../controller/accountdetails.php');
    exit();
}

