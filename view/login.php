<head>
<link rel="stylesheet" type="text/css" href="../css/views.css"/>



</head>

<form action="../controller/login.php" method="POST">


  <div class="container">
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
</form>



<form action="register.php" method="POST">
    <a>Have not got an account? <button type="submit">Register</button></a>

</form>
