<?php

require_once "../model/filmmodel.php";
$filmId=$_GET['id'];
$film =getFilmDetails($filmId);



require "../view/layout/navigation.php";
require "../view/details.php";



?>


