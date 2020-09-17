<?php
  include_once("include/session.php");
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
    <link rel="stylesheet" href="css/main.css">
    <!-- Link To Font Awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

    
<body>
  <!--  begin navigation  -->
  
  
   <header>
        <nav>
            <img src="img/logo.png" class="nav-logo" alt="logo">
            <ul class="nav-menu">
                <li><a href="index.php"class="active">Home</a></li>
                <li><a href="#compétance">Compétance</a></li>
                <li><a href="#project">Projects</a></li>
                <li><a href="#contact">Contacter-Moi</a></li>
                <li><a href="login.php">Login</a></li>
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
                        <a href="contact.php">About Me</a>
                        <a href="login.php">Login</a>
                    </div>
                </div>
            </div>

        </nav>
    </header> 
    
  <!--   end navigation -->
  