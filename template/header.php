<?php
require('app/start.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> My Portforio</title>
    <!-- Link To boostrtap CSS -->
    <link rel="stylesheet" href="css/boot.css">
    <!-- Link To  CSS  global style -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Link To Font Awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

    
<body id="page-top" class="index">
  <!--  begin navigation  -->
  
  
  <header>
        <nav>
            <img src="img/logo.png" alt="logo">
            <ul>
                <li><a href="index.php"class="active">Home</a></li>
                <li><a href="#project">Projects</a></li>
                <li><a href="#contact">Contact Us</a></li>
                <li><a href="login.php" >Login</a></li>
            </ul>
            <div class="drop-down">
                <input type="checkbox" class="drop-down__put" />
                <div class="drop-down__hamburger">
                    <img class="drop-down__hamburger--symbole" src="img/icon-hamburger.svg" alt="menu">
                    <img class="drop-down__hamburger--close" src="img/icon-close.svg">
                </div>
                <div class="drop-down__menu">
                    <div>
                        <a href="index.php">Home</a>
                        <a href="project.php">Projects</a>
                        <a href="contact.php">Contact Us</a>
                        <a href="login.php">Login</a>
                    </div>
                </div>
            </div>

        </nav>
    </header>
    
    <header id="home">
    <div class="container text-center">
      <div class="row">
          <div class="col-md-4">
          <img src="img/moi.jpg" alt="Picture" class="img-moi" />

          </div>
        <div class="col-md-8">
          <div class="intro-text">
            <span class="name">Kaddour Meach</span>
            <hr class="star-light"></hr>
          <span class="skills">Développeur Web Apprennent</span>
        </div>
      </div>
    </div>
    </div>
  </header>

  <!--   end navigation -->