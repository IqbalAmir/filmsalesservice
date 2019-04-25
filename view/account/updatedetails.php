<!DOCTYPE HTML>
<html>
<head>
    <title>Details</title>
    <link rel="stylesheet" type="text/css" href="../css/views.css"/>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />




    <div style="text-align: center">
    <h2>Update Your Personal Information</h2>
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
        <br>

        <button class="button2" type="submit" name="update-details">Update</button>

</div>

</content>

    </form>



</body>
</html>
