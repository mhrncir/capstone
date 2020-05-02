<?php

if (isset($_POST['login-submit'])) {

  
  require 'dbh.inc.php';

  
  $mailuid = $_POST['mailuid'];
  $password = $_POST['pwd'];

  

  // We check for any empty inputs
  if (empty($mailuid) || empty($password)) {
    header("Location: ../index.php?error=emptyfields&mailuid=".$mailuid);
    exit();
  }
  else {

    // Prepared Statements
    $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;";
    
    $stmt = mysqli_stmt_init($conn);
    
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      // If there is an error we send the user back to the signup page.
      header("Location: ../index.php?error=sqlerror");
      exit();
    }
    else {

      
      // binding data and hiding it form the user
      mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
      // sending the data to the data base
           mysqli_stmt_execute($stmt);
      
      $result = mysqli_stmt_get_result($stmt);
      
      if ($row = mysqli_fetch_assoc($result)) {
        // 
        $pwdCheck = password_verify($password, $row['pwdUsers']);
        // If passwords don't match we 
        if ($pwdCheck == false) {
          // If error we send the user back to the signup page.
          header("Location: ../index.php?error=wrongpwd");
          exit();
        }
        else if ($pwdCheck == true) {

         
          session_start();
          $_SESSION['id'] = $row['idUsers'];
          $_SESSION['uid'] = $row['uidUsers'];
          $_SESSION['email'] = $row['emailUsers'];
          // Now the user is registered and logged in 
          header("Location: ../index.php?login=success");
          exit();
        }
      }
      else {
        header("Location: ../index.php?login=wronguidpwd");
        exit();
      }
    }
  }
  // Closing prepared satement and database to save resources
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
else {
  // If the user tries to access this page an inproper way, we send them back to the signup page
  header("Location: ../signup.php");
  exit();
}
