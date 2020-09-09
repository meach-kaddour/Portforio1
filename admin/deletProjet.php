<?php 
include_once("include/include.php");

if(isset($_POST["Submit"])){
        $name = $_POST["name"];        
        $Image = $_POST["Image"];
        $urlProject = $_POST["url"];
        $description = $_POST["description"];

        $Image = $_FILES["Image"]["name"];
        $Target= "Upload/".basename($_FILES["Image"]["name"]);

            global $db;
            $deleteUrl=$_GET['delete'];
            $Query="DELETE FROM projects WHERE id_projet='$deleteUrl'";
            $Execute = mysqli_query($db,$Query);
            move_uploaded_file($_FILES["Image"]["tmp_name"],$Target);

            if($Execute){
                $_SESSION["successMessage"]= "Projet a été bien Supprimeé";
                Redirect_to("dash.php");

            }else{
                $_SESSION["ErrorMessage"]= "Error ";
                Redirect_to("dash.php");
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
                            <li ><a class="nav-link active " href="dash.php">Dashbord</a></li>
                            <li ><a class="nav-link " href="addNewProject">Ajouter un projet</a></li>
                            <li ><a class="nav-link " href="addTechno.php">Technologies</a></li>
                            <li><a class="nav-link" href="../index.php"> Acceder au site</a></li>
                            <li><a class="nav-link" href="logout.php">Logout</a></li>
                        </ul>
                </div>
            <!-- End aside area -->
            <!-- Main area -->
                <div class="col-sm-10">
                    <br>
                    <h2>Supperssions Des Projets</h2>
                    <hr>
                    <?php
                        echo Message(); 
                        echo successMessage();
                    ?>
                    <br> 

                        <div>
                        <?php 
                             $db = new mysqli('127.0.0.1', 'root', '', 'phpcms');
                             $urlQuery=$_GET['delete'];
                             $Query=" SELECT * FROM projects WHERE id_projet ='$urlQuery'";
                             $Execute = $db->query($Query);
                             foreach ($Execute as $execute){
                                $idProjet=$execute['id_projet'];
                                $nameProjet=$execute['name_projet'];
                                $imageProjet=$execute['image_projet'];
                                $descriptionProjet=$execute['description_projet'];
                                $slug=$execute['slug'];
                            }
                        ?>
                        <form action="deletProjet.php?delete=<?php echo $urlQuery ;?>" method="POST" enctype="multipart/form-data">
                            <fieldset>
                                <div class="form-group">
                                    <label for="name"><span class="fieldInfo">Name:</span></label>
                                    <input value="<?php echo $nameProjet; ?>" type="text" class ="form-control" name="name" id="name"placeholder="Nom DeProjet">
                                
                                </div>
                            
                                <div class="form-group">
                                    <label for="Image"><span class="fieldInfo">Select Image:</span></label>
                                    <input value="<?php echo $imageProjet; ?>" type="File" class ="form-control" name="Image" id="Image"placeholder="Select Image">
                                
                                </div>
                                <div class="form-group">
                                    <label for="url"><span class="fieldInfo">Lien URL</span></label>
                                    <input value="<?php echo $slug; ?>" type="text" class ="form-control" name="url" id="Title"placeholder="Lien URL">
                                
                                </div>
                                <div class="form-group">
                                    <label for="descrip"><span class="fieldInfo">Description De Projet</span></label>
                                    <textarea  class ="form-control" name="description" type="text" id="description"><?php echo $descriptionProjet; ?></textarea>
                                
                                </div>
                           
                                <input class="btn btn-danger btn-block" type="submit" name="Submit" value="Supprimée Projet">
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