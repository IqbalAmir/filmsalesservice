<?php

include_once "../model/filmmodel.php";
require "../view/layout/navigation.php";
require "../view/account/updatedetails.php";




if (isset($_POST['update-details'])) {
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$password=$_POST['psw'];
$street=$_POST['street'];
$city=$_POST['city'];
$postcode=$_POST['postcode'];
updateDetails($name,$phone,$email,$street,$city,$postcode,$password);

    header('location: ../controller/accountdetails.php');
    exit();
}

