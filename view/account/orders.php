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

<div>
    <h2> You have purchased a total of <?php echo getNumOrders(); ?> films </h2>

    <table style="float: left;">
        <tr>
            <th>Film Title</th>
            <th>Payment ID</th>
            <th>Price</th>
            <th>Date Purchased</th>
            <?php echo getPurchasedFilms(); ?>
        </tr>

    </table>

    <table class="orders">
        <tr>
            <th style="background-color: #008CBA">Order Date</th>
            <th style="background-color: #008CBA">Order Total</th>
            <?php echo getPreviousOrders(); ?>
        </tr>

    </table>
</div>

</body>
</html>
