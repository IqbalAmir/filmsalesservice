<!DOCTYPE HTML>
<html>
<head>
    <title>Details</title>
    <link rel="stylesheet" type="text/css" href="../css/views.css"/>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />




    <div style="text-align: center">
    <h2>Update Your Details</h2>
        </div>
</head>
<body>



<div style="text-align: center">
<content>

    <form action="" method="POST">




    <label for="name"><br>Name</br></label>
    <input type="text" placeholder="" name="name" value="<?php echo getCustomerName(); ?>" >
    <br>


    <label for="phone"><br>Phone</br></label>
    <input type="text" placeholder="" name="phone" value="" >

    <br>

    <label for="email"><br>Email</br></label>
    <input type="text" placeholder="" name="email" value="" >
    <br>


    <br>

    <label for="street"><br>Street</br></label>
    <input type="text" placeholder="" name="street" >



    <br>

    <label for="city"><br>City</br></label>
    <input type="text" placeholder="" name="city" >



    <br>

    <label for="postcode"><br>Postcode</br></label>
    <input type="text" placeholder="" name="postcode"  >

    <br>
        <br>
        <br>

        <button type="submit" name="update-details">Update</button>

</div>

</content>

    </form>



</body>
</html>
