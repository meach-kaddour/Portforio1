<?php
  include_once("include/session.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Porteforio,web developper,front-end,back-end,developpement web,HTML, CSS, JavaScript,Portfolio,php developer">
    <meta name="description" content="Un site de portfolio est une façon unique de mettre en valeur votre travail et de faire connaître votre travail aux autres. C’est comme une plateforme à feuilles persistantes pour vos projets, vos études de cas et les informations vous concernant. De plus, c’est l’une des meilleures façons d’exprimer votre personnalité, votre expérience et vos compétences.">
    <title> My Portforio</title>
    <!-- Link To boostrtap CSS -->
    <link rel="stylesheet" href="asset/css/boot.css">
    <!-- Link To  CSS  global style -->
    <link rel="stylesheet" href="asset/css/main.css">
    <!-- Link To Font Awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

    
<body>
  <!--  begin navigation  -->
  
  
   <header>
        <nav>
            <img src="asset/img/logo.png" class="nav-logo" alt="logo">
            <ul class="nav-menu">
                <li><a href="index.php" class="link ">Home</a></li>
                <li><a href="#compétance" class="link">Compétance</a></li>
                <li><a href="project.php" class="link">Projects</a></li>
                <li><a href="contact.php" class="link">Contacter-Moi</a></li>
                <li><a href="login.php" class="link">Login</a></li>
            </ul>
            <div class="drop-down">
                <input type="checkbox" class="drop-down__put" />
                <div class="drop-down__hamburger">
                    <img class="drop-down__hamburger--symbole" src="asset/img/icon-hamburger.svg" alt="menu">
                    <img class="drop-down__hamburger--close" src="asset/img/icon-close.svg">
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
    <script>
        var menu = document.querySelector(".nav-menu");
var link = menu.querySelector(".link");
for (var i = 0; i < link.length; i++) {
    link[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace("active", "");
        this.className += "active";
    });
}
    </script>
    
  <!--   end navigation -->
  