<!DOCTYPE HTML>
<html>
<head>
<title>Browse</title>
<link rel="stylesheet" type="text/css" href="../css/views.css"/>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />



    <div style="text-align: center">
        <h1>Select a Film</h1>
    </div>


</head>
<body>




<section>

<?php
if($film){
	foreach ($film as $film) {
	    echo "<h2>";
      echo "<a href='../controller/details.php?id={$film["filmid"]}'>";
	    echo "{$film["filmtitle"]}";
      echo "</h2>";
	}
}else{
	echo "<h1>No Results</h1>";
}
?>

</section>


</body>
</html>
