<?php

include_once "../model/filmmodel.php";
require "../view/layout/navigation.php";
require "../view/account/address.php";




if (isset($_POST['update-address'])) {
    $street=$_POST['street'];
    $city=$_POST['city'];
    $postcode=$_POST['postcode'];
    updateAddress($street,$city,$postcode);

    header('location: ../controller/accountdetails.php');
    exit();
}

