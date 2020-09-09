<?php 
include("include/include.php");

if(isset($_POST["Submit"])){
        $name = $_POST["name"];        
        $Image = $_POST["Image"];
        $niveau= $_POST["niveau"];

        $Image = $_FILES["Image"]["name"];
        $Target= "Upload/".basename($_FILES["Image"]["name"]);


        if(empty($name)||empty($Image)){
            $_SESSION["ErrorMessage"]="Tous les champs Doit Renseignés";
            Redirect_to("addTechno.php");
        }else{
            global $db;
            $Query="INSERT INTO  technologies (name_technologies,image_technologies,niveau_technologies)
            VALUES ('$name','$Image','$niveau')";
            $Execute = mysqli_query($db,$Query);
            move_uploaded_file($_FILES["Image"]["tmp_name"],$Target);

            if($Execute){
                $_SESSION["successMessage"]= "Technology a été bien Ajoutée";
                Redirect_to("addTechno.php");

            }else{
                $_SESSION["ErrorMessage"]= "Error ";
                Redirect_to("addTechno.php");
            }
        }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Link To Boostrap CSS -->
    <link rel="stylesheet" href="../css/boot.css">
    <!-- Link To CSS -->
    <link rel="stylesheet" href="../css/styleadmin.css">

</head>
<body>
<div class="container-fluid">
    <!-- Start Navbar -->
        <header class="row">
            <nav class="col-md-12">
                <div class="row">
                <div class="col-md-8 text-dark"><img src="../img/logo.png"  class="nav-brand"alt="logo">
                <h1 class="inline">Admin Dashboard</h1>
                </div>
                </div>
            </nav>
        </header>
    <!-- End Navbar -->
    <!-- Start Main area -->
        <div class="row">
            <!-- aside-area -->
                <div class="col-sm-2">  
                        <ul id="side-menu" class="nav nav-pills nav stacked" >
                            <li ><a class="nav-link " href="dash.php">Dashbord</a></li>
                            <li ><a class="nav-link " href="addNewProject">Ajouter un projet</a></li>
                            <li ><a class="nav-link active" href="addTechno.php">Technologies</a></li>
                            <li><a class="nav-link" href="../index.php"> Acceder au site</a></li>
                            <li><a class="nav-link" href="logout.php">Logout</a></li>
                        </ul>
                </div>
            <!-- End aside area -->
            <!-- Main area -->
                <div class="col-sm-10">
                    <br>
                    <h2>Ajouter Nouveaux Technology</h2>
                    <hr>
                    <?php
                        echo Message(); 
                        echo successMessage();
                    ?>
                    <br> 

                        <div>
                        <form action="addTechno.php" method="POST" enctype="multipart/form-data">
                            <fieldset>
                                <div class="form-group">
                                    <label for="name"><span class="fieldInfo">Name</span></label>
                                    <input type="text" class ="form-control" name="name" id="name"placeholder="Nom De Technology">
                                
                                </div>
                            
                                <div class="form-group">
                                    <label for="Image"><span class="fieldInfo">Select Image:</span></label>
                                    <input  type="File" class ="form-control" name="Image" id="Image"placeholder="Select Image">
                                
                                </div>
                                <div class="form-group">
                                    <label for="url"><span class="fieldInfo">Niveau</span></label>
                                    <input type="text" class ="form-control" name="niveau" id="Title"placeholder="Votre Niveau">
                                
                                </div>
                                
                           
                                <input class="btn btn-success btn-block" type="submit" name="Submit" value="Ajouter">
                            </fieldset>

                        </form>
                        </div>
                        <br>
                        
                    </div>
                        <!--End main area -->

              

            <!-- End Main area -->
        </div>
    </div>
    <footer class="row footer">
        <div class="col-md-12">
        <p class="text-dark">All <span>CopyRight@ 2020</span>  Reserved Par Youcode</p>
        </div>
    </footer>    
<script src="../js/script.js"></script>
</body>
</html>