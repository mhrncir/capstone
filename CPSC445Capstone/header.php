<?php
  
  session_start();
  
  require "includes/dbh.inc.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Scuba Steves Website">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>
    Scuba Steves Web Site
    </title>
    <link rel="stylesheet" href="styless.css">
  </head>
  <body>
  

    
    <header>
      <nav class="nav-header-main">
        <a class="header-logo" href="home.php">
          <img src="img/mermaid.jpg" alt="logo">
        </a>
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="calender.php">Calender </a></li>
          <li><a href="about.php">About </a></li>
          <li><a href="gallery.php">Products</a></li>
          <li><a href="contact.php">Contact</a></li>
         
        </ul>
      </nav>
      
      <div class="header-login">
        
        <?php
        if (!isset($_SESSION['id'])) {
          echo '<form action="includes/login.inc.php" method="post">
            <input type="text" name="mailuid" placeholder="E-mail/Username">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="login-submit">Login</button>
          </form>
          <a href="signup.php" class="header-signup">Signup</a>';
        }
        else if (isset($_SESSION['id'])) {
          echo '<form action="includes/logout.inc.php" method="post">
            <button type="submit" name="login-submit">Logout</button>
          </form>';
        }
        ?>
      </div>
      
    </header>
    
