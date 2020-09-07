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
                            <li ><a class="nav-link active" href="dashbord.php">Dashbord</a></li>
                            <li ><a class="nav-link" href="addNewProject.php">Ajouter un projet</a></li>
                            <li ><a class="nav-link " href="technologie.php">Technologies</a></li>
                            <li><a class="nav-link" href="../index.php"> Acceder au site</a></li>
                            <li><a class="nav-link" href="logout.php">Logout</a></li>
                        </ul>
                </div>
            <!-- End aside area -->
            <!-- Main area -->

                <div class="col-sm-10">
                    <div class="row">
                        <h1 class="text-center">Projects</h1>
                    </div>
                    <div class="container-fluid">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <tr>
                                <th>No</th>
                                <th>Article titel</th>
                                <th>Auteur</th>
                                <th>Category</th>
                                <th>Date de creation</th>
                                <th>Image</th>
                                <th>Action</th>
                                <th>Détails</th>
                            </tr>

                        <?php
                        //  global $db;
                        //  $Query="SELECT *FROM posts ORDER BY date desc ";
                        //  $Execute = $db->query($Query);
                        //  $srN=0;
                        //  foreach ($Execute as $execute){
                        //     $idArticle=$execute['id'];
                        //     $titleArticle=$execute['title'];
                        //     $imageArticle=$execute['image'];
                        //     $categoryArticle=$execute['category'];
                        //     $auteurArticle=$execute['auteur'];
                        //     $dateArticle=$execute['date'];
                        //     $contentArticle=$execute['article'];
                        //     $srN++;

                        ?>
                        <tr>
                            <td>fg</td>
                            <td style="color:#5E5fEB">
                                <?php
                            //      if(strlen($titleArticle) >20)
                            //         {
                            //          $titleArticle=substr($titleArticle,0,20)."..";
                            //         }
                            //  echo $titleArticle ;
                            ?>
                            </td>
                            <td>hjk</td>
                            
                            
                            <td>jk</td>
                            <td>
                                <?php 
                                // if(strlen($dateArticle) >20)
                                //     {
                                //         $dateArticle=substr($dateArticle,0,11)."..";
                                //     }
                                // echo $dateArticle ;
                                ?>
                            </td>
                            <td><img src="" width="200px"; height="40px"></td>
                            <td>
                            <!-- <a href="EditPost.php?Edit="> <span class="btn btn-warning">Edit</span></a> 
                            <a href="DeletePost.php?delete="> <span class="btn btn-danger">Delete</span></a>  -->

                            </td>
                            <td><a href="../article.php?id=" target="_blank"><span class="btn btn-primary">Live Preview</span></a></td>                       
                        </tr>
                        <!-- <?php
                    //  }
                    ?> -->
                    </table>
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