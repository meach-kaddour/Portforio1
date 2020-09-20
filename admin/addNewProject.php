<?php 
include("include/include.php");

if(isset($_POST["Submit"])){
        $name = $_POST["name"];        
        $Image = $_POST["Image"];
        $urlProject = $_POST["url"];
        $description = $_POST["description"];

        $Image = $_FILES["Image"]["name"];
        $Target= "Upload/".basename($_FILES["Image"]["name"]);


        if(empty($name) ||empty($urlProject) ||empty($Image)){
            $_SESSION["ErrorMessage"]="Tous les champs Doit Renseignés";
            Redirect_to("addNewProject.php");
        }elseif (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$urlProject)) {
            $_SESSION["ErrorMessage"]="invalid url";
            Redirect_to("addNewProject.php");
         }  
        else{
            global $db;
            $Query="INSERT INTO  projects (name_projet,image_projet,description_projet,slug)
            VALUES ('$name','$Image','$description','$urlProject')";
            $Execute = mysqli_query($db,$Query);
            move_uploaded_file($_FILES["Image"]["tmp_name"],$Target);

            if($Execute){
                $_SESSION["successMessage"]= "Projet a été bien Ajoutée";
                Redirect_to("addNewProject.php");

            }else{
                $_SESSION["ErrorMessage"]= "Error ";
                Redirect_to("addNewProject.php");
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
    <link rel="stylesheet" href="../asset/css/boot.css">
    <!-- Link To CSS -->
    <link rel="stylesheet" href="../asset/css/styleadmin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="container-fluid">
    <!-- Start Navbar -->
        <header class="row">
            <nav class="col-md-12">
                <div class="row">
                <div class="col-md-8 text-dark"><img src="../asset/img/logo.png"  class="nav-brand"alt="logo">
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
                            <li ><a class="nav-link active" href="dash.php"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Dashbord</a></li>
                            <li ><a class="nav-link" href="addNewProject"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;Ajouter un projet</a></li>
                            <li ><a class="nav-link " href="addTechno.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp; Technologies</a></li>
                            <li><a class="nav-link" href="../index.php"><i class="fa fa-eye" aria-hidden="true"></i> &nbsp;Acceder au site</a></li>
                            <li><a class="nav-link" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;Logout</a></li>
                        </ul>
                </div>
            <!-- End aside area -->
            <!-- Main area -->
                <div class="col-sm-10">
                    <br>
                    <h2>Ajouter Nouveaux Projets</h2>
                    <hr>
                    <?php
                        echo Message(); 
                        echo successMessage();
                    ?>
                    <br> 

                        <div>
                        <form action="addNewProject.php" method="POST" enctype="multipart/form-data">
                            <fieldset>
                                <div class="form-group">
                                    <label for="name"><span class="fieldInfo">Name:</span></label>
                                    <input type="text" class ="form-control" name="name" id="name"placeholder="Nom DeProjet">
                                
                                </div>
                            
                                <div class="form-group">
                                    <label for="Image"><span class="fieldInfo">Select Image:</span></label>
                                    <input  type="File" class ="form-control" name="Image" id="Image"placeholder="Select Image">
                                
                                </div>
                                <div class="form-group">
                                    <label for="url"><span class="fieldInfo">Lien URL</span></label>
                                    <input type="text" class ="form-control" name="url" id="Title"placeholder="Lien URL">
                                
                                </div>
                                <div class="form-group">
                                    <label for="descrip"><span class="fieldInfo">Description De Projet</span></label>
                                    <textarea class ="form-control" name="description" type="text" id="description"></textarea>
                                
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