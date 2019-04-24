<?php




  if (filter_var($email,FILTER_VALIDATE_EMAIL))
  {
    echo("<p>$email is a valid email address</p>");
  } else {
    echo("<p>$email is not a valid email address</p>");
  }


//  if(empty($email)|| empty($password) || empty($pswrepeat)){
//     header("Location: ../controller/register.php?error=emptyfields&email=".$email);
//     exit();
//  }

 if (filter_has_var(INPUT_POST,'email')){
      $email = $_POST['email'];
    }

  else if ($password !== $pswrepeat){
    header("Location: ../controller/register.php?error=passwordcheck&email=".$email);
    exit();
  }

//  else {
//    $sql = "SELECT personemail FROM fss_person WHERE personemail=?";
//    $stmt = mysqli_stmt_init($conn);
//    if(!mysqli_stmt_prepare($stmt,$sql)) {
//      header("Location: ../controller/register.php?error=sqlerror");
//      exit();
//    }
//    else {
//      mysqli_stmt_bind_param($stmt, "s", $email);
//      mysqli_stmt_execute($stmt);
//      mysqli_stmt_store_result($stmt);
//      $resultcheck = mysqli_stmt_num_rows($stmt);
//      if ($resultcheck > 0){
//        header("Location: ../controller/register.php?error=emailalreadytaken");
//        exit();
//      }
//    }
//
//    }



















?>
