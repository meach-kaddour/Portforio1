<!-- Start header -->
<?php
require('template/header.php');
?>
<!--   End header -->
<!--   Start section projects -->
<section id="project" class="mt-3 mb-3">
      <div class="green-divider"></div>
      <div class="heading">
        <h2>Projects</h2>
      </div>
      <div class="container-fluid">
        <div class="row">
              <?php
                require 'include/connection.php';
                $db = Database::connect();
                $Query="SELECT *FROM projects";
                $Execute = $db->query($Query);
                $projects = $Execute->fetchAll();
                                                
                foreach ($projects as $project){
                  $idProjet=$project['id_projet'];
                  $nameProjet=$project['name_projet'];
                  $imageProjet=$project['image_projet'];
                  $descriptionProjet=$project['description_projet'];
                  $slug=$project['slug'];
              ?>

            <div class="col-md-4 col-lg-3 col-sm-12">
              <div class="card card-animate ">
                  <img src="admin/upload/<?php echo $imageProjet;?>" class="card-img-top" alt="screen Project">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $nameProjet;?></h5>
                    <p class="card-text">
                    <?php
                      if(strlen($descriptionProjet) >60)
                          {
                            $descriptionProjet=substr($descriptionProjet,0,140)."..";
                          }
                        echo htmlentities($descriptionProjet) ;
                    ?>
                    </p>
                  </div>
                  <div class="card-footer">
                    <a  href="<?php echo $slug;?> target="_blank">View Project 
                      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="eye" class="svg-inline--fa fa-eye fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z"></path></svg>
                    </a>
                  </div>
              </div>
            </div>
            <br><br>    
          <?php 
          }
          Database::disconnect();
          ?> 
        </div>
      </div>
  
</section>
<!--   End section projects -->

<!-- start footer -->
<?php
require('template/footer.php');
?>
<!-- End footer -->