<?php 
include_once("include/include.php");

if(isset($_POST["Submit"])){
        $name = $_POST["name"];        
        $Image = $_POST["Image"];
        $niveau = $_POST["niveau"];
       

        $Image = $_FILES["Image"]["name"];
        $Target= "Upload/".basename($_FILES["Image"]["name"]);

            global $db;
            $deleteUrl=$_GET['delete'];
            $Query="DELETE FROM technologies WHERE id_technologies='$deleteUrl'";
            $Execute = mysqli_query($db,$Query);
            move_uploaded_file($_FILES["Image"]["tmp_name"],$Target);

            if($Execute){
                $_SESSION["successMessage"]= "technologie a été bien Supprimeé";
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
                    <h2>Supperssions Des technology</h2>
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
                             $Query=" SELECT * FROM technologies WHERE id_technologies ='$urlQuery'";
                             $Execute = $db->query($Query);
                             foreach ($Execute as $execute){
                                $idTechno=$execute['id_technologies'];
                                $nameTechno=$execute['name_technologies'];
                                $imageTechno=$execute['image_technologies'];
                                $niveauTechno=$execute['niveau_technologies'];
                            }
                        ?>
                        <form action="deletTechno.php?delete=<?php echo $urlQuery ;?>" method="POST" enctype="multipart/form-data">
                            <fieldset>
                                <div class="form-group">
                                    <label for="name"><span class="fieldInfo">Name:</span></label>
                                    <input value="<?php echo $nameTechno; ?>" type="text" class ="form-control" name="name" id="name"placeholder="">
                                
                                </div>
                            
                                <div class="form-group">
                                    <label for="Image"><span class="fieldInfo">Select Image:</span></label>
                                    <input value="<?php echo $imageTechno; ?>" type="File" class ="form-control" name="Image" id="Image"placeholder="">
                                
                                </div>
                                <div class="form-group">
                                    <label for="url"><span class="fieldInfo">Lien URL</span></label>
                                    <input value="<?php echo $niveauTechno; ?>" type="text" class ="form-control" name="url" id="Title"placeholder="">
                                
                                </div>
                                
                           
                                <input class="btn btn-danger btn-block" type="submit" name="Submit" value="Supprimée technology">
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

