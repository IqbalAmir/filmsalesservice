<?php
require_once "../model/filmmodel.php";



$price=$_POST['price'];
$name=$_POST['name'];
$quantity=$_POST['qty'];


$product = array($name,$price, $quantity);
$_SESSION['cart'] = $product;











require "../view/layout/navigation.php";
require "../view/basket.php";



