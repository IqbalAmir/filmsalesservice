<!DOCTYPE HTML>
<html>
<head>
<title>Details</title>
<link rel="stylesheet" type="text/css" href="../css/views.css"/>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<?php
//require "../view/layout/navigation.php";
?>

</head>
<body>

<content>


<?php
if($film){
	echo "<h3>".$film['title']."</h3>";
	echo "<ul>";
	echo "<li>Description: ".$film['description']."</li>";
	echo "<li>Rating: ".$film['rating']."</li>";
	echo "<li>Price: ".$film['price']."</li>";

	echo "</ul>";
}
?>

</content>



</body>
</html>
