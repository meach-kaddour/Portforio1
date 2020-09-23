
<?php 
include("../include/session.php");
if(!isset($_SESSION['username']))
	{
		Redirect_to('../login.php');
		exit;
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
                        <ul id="side-menu" class="nav" >
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
                    <div class="row">
                        <h1 class="text-center">Projects</h1>
                    </div>
                    <?php
                    echo Message(); 
                    echo successMessage();
                    ?>
                    <div class="container-fluid">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <tr>
                                <th>No</th>
                                <th>Nom de Projet</th>
                                <th>Description de Projet</th>
                                <th>Url</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>

                        <?php
                         require '../include/connection.php';
                         $db = Database::connect();
                         $Query="SELECT *FROM projects  ";
                         $Execute = $db->query($Query);
                         $srN=0;
                         
                         foreach ($Execute as $execute){
                            $idProjet=$execute['id_projet'];
                            $nameProjet=$execute['name_projet'];
                            $imageProjet=$execute['image_projet'];
                            $descriptionProjet=$execute['description_projet'];
                            $slug=$execute['slug'];
            
                            $srN++;

                        ?>
                        <tr>
                            <td><?php echo $srN;?></td>

                            <td><?php echo $nameProjet;?></td>

                            
                            
                            <td style="color:#5E5fEB">
                                <?php
                                 if(strlen($descriptionProjet) >200)
                                    {
                                        $descriptionProjet=substr($descriptionProjet,0,30)."...";
                                    }
                             echo $descriptionProjet ;
                            ?>
                            </td>
                            <td> 
                            <?php echo $slug=substr($slug,0,30);?>
                            </td>
                            
                            <td><img src="upload/<?php echo $imageProjet; ?>" style="width:100px;"></td>
                            <td style='width:200px'>
                            <a href="editProject.php?Edit=<?php echo $idProjet;?>"> <span class="btn btn-warning">Edit</span></a> 
                            <a href="deletProjet.php?delete=<?php echo $idProjet;?>"> <span class="btn btn-danger">Delete</span></a> 
                            
                            </td>
                            <!-- <td><a href="../projects.php?id=" target="_blank"><span class="btn btn-primary">Live Preview</span></a></td>                        -->
                        </tr>
                         <?php 
                         }  
                         Database::disconnect();
                         ?>
                    </table>
                    </div>
                    <!-- table technology -->
                    <div class="row">
                        <h1 class="text-center">Technologies</h1>
                    </div>
                   
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <tr>
                                <th>No</th>
                                <th>Nom de technologie</th>
                                <th>Niveau</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>

                        <?php
                         $db = Database::connect();
                         $Query="SELECT *FROM technologies ";
                         $Execute = $db->query($Query);
                         $srN=0;
                         
                         foreach ($Execute as $execute){
                            $idTechno=$execute['id_technologies'];
                            $nameTechno=$execute['name_technologies'];
                            $imageTechno=$execute['image_technologies'];
                            $niveauTechno=$execute['niveau_technologies'];
                           
            
                            $srN++;

                        ?>
                            <tr>
                                <td><?php echo $srN;?></td>

                                <td><?php echo $nameTechno;?></td>

                                <td> <?php echo $niveauTechno;?> </td>
                                
                                <td><img src="upload/<?php echo $imageTechno; ?>" style="width:100px;"></td>
                                <td>
                                <a href="deletTechno.php?delete=<?php echo $idTechno;?>"> <span class="btn btn-danger">Delete</span></a> 

                                </td>
                                <!-- <td><a href="../article.php?id=" target="_blank"><span class="btn btn-primary">Live Preview</span></a></td>                        -->
                            </tr>
                         <?php } 
                         Database::disconnect();
                         ?> 
                        </table>
                    </div>

                

                </div>

        </div>       
    </div>       

    <!-- End Main area -->
</div>
        <footer class="row footer">
            <div class="col-md-12">
            <p class="text-dark">All <span>CopyRight@ 2020</span>  Reserved Par Youcode</p>
            </div>
        </footer>
<script src="../js/script.js"></script>
</body>
</html>
