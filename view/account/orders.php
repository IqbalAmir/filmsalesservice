<!DOCTYPE HTML>
<html>
<head>
    <title>Details</title>
    <link rel="stylesheet" type="text/css" href="../css/views.css"/>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>


    <div style="text-align: center">
        <h2>Placed Orders For <?php echo getCustomerName(); ?></h2>
    </div>
</head>
<body>

<content>

    <?php


    echo "<table>
<tr>
<th>Film Title</th>
<th>Payment ID</th>
</tr>";

    echo getPreviousOrders();
    ?>

   <h2> You have purchased a total of <?php echo getNumOrders(); ?> films </h2>

</content>




</body>
</html>
