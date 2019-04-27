<!DOCTYPE HTML>
<html>
<head>
    <title>Details</title>
    <link rel="stylesheet" type="text/css" href="../css/views.css"/>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />




    <div style="text-align: center">
        <h2>Update Your Delivery Address</h2>
    </div>
</head>
<body>



<div style="text-align: center">
    <content>

        <form action="" method="POST">


            <label for="street"><br>Street</br></label>
            <input type="text" placeholder="" name="street" value="<?php echo getcustomerStreet(); ?>" >



            <br>

            <label for="city"><br>City</br></label>
            <input type="text" placeholder="" name="city" value="<?php echo getcustomerCity(); ?>" >



            <br>

            <label for="postcode"><br>Postcode</br></label>
            <input type="text" placeholder="" name="postcode" value="<?php echo getcustomerPostcode(); ?>"  >

            <br>
            <br>
            <br>

            <button class="button2" type="submit" name="update-address">Update</button>

</div>

</content>

</form>



</body>
</html>
