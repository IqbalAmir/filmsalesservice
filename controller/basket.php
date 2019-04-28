<?php
require_once "../model/filmmodel.php";




if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $price = $_POST['price'];
    $name = $_POST['name'];
    $quantity = $_POST['qty'];

    $product = array($name, $price, $quantity);
    $_SESSION['cart'] = $product;


}











require "../view/layout/navigation.php";
require "../view/basket.php";



