<!DOCTYPE HTML>
<html>
<head>
    <title>Details</title>
    <link rel="stylesheet" type="text/css" href="../css/views.css"/>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>

</head>
<body>

<content>


    <?php
    if ($film) {
        echo "<h3>" . $film['title'] . "</h3>";
        echo "<ul>";
        echo "<li>Description: " . $film['description'] . "</li>";
        echo "<li>Rating: " . $film['rating'] . "</li>";
        echo "<li>Price: " . $film['price'] . "</li>";

        echo "</ul>";
    }
    ?>


</content>


<footer>
    <form method = "POST" action="../controller/basket.php">
        <td>Quantity</td>
        <input type="text" name="qty" class="cart">
        <input type="hidden" name="name" value="<?php echo $film['title']?>">
        <input type="hidden" name="price" value="<?php echo $film['price']?>">
        <button class="button1" name="Add Cart" type="submit">Add to Cart</button>
    </form>
</footer>


</body>
</html>
