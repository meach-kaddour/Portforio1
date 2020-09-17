<?php
require('template/header.php');
?>
<!--   End header -->

<!-- Start section About Me -->
<section id="about">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
              <img src="img/moi.jpg" alt="Picture" class="img-moi" />
            </div>
            <div class="col-md-6">
                <div class="intro-text">
                  Bonjour A tous,je suis <h1> Kaddour Meach</h1>
                  <hr class="star-light">
                  <h3>Développeur web</h3>
                  
                  <a href="img/cv.pdf" class="my-Button" Download>Télecharger Mon CV</a>
                  
                </div>
            </div>
            
            
        </div>
      </div>
</section>
<!-- End section About Me -->

<!-- Start Section Compétance -->
<section  id="compétance">
  <div class="green-divider"></div>
  <div class="heading">
    <h2>Compétances</h2>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="progress">
          <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuein="0" aria-valuemax="100" style="width:65%">
          <h5>HTML5 65%</h5>
          </div>
        </div>
        <div class="progress">
          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuein="0" aria-valuemax="100" style="width:60%">
          <h5>CSS3 60%</h5>
          </div>
        </div>
        <div class="progress">
          <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuein="0" aria-valuemax="100" style="width:45%">
          <h5>Boostrap 45%</h5>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="progress">
          <div class="progress-bar" role="progressbar" aria-valuenow="35" aria-valuein="0" aria-valuemax="100" style="width:35%">
          <h5>JavaScript 35%</h5>
          </div>
        </div>
        <div class="progress">
          <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuein="0" aria-valuemax="100" style="width:45%">
          <h5>PHP 45%</h5>
          </div>
        </div>
        <div class="progress">
          <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuein="0" aria-valuemax="100" style="width:50%">
          <h5>MySql 50%</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</section>
<!-- End Section Compétance -->



<!--   Start section projects -->
<section id="project">
      <div class="green-divider"></div>
      <div class="heading">
        <h2>Projects</h2>
      </div>
      <div class="container-fluid">
        <div class="row">
              <?php
                require 'include/connection.php';
                $db = Database::connect();
                $Query="SELECT *FROM projects LIMIT 6 ";
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
<!--   Start  section contact -->

<section id="contact">
  <div class="green-divider"></div>
  <div class="heading">
    <h2>Contacter-Moi</h2>
  </div>
  <div class="container-fluid">           
    <div>
       <?php
        echo Message(); 
        echo successMessage();
       ?>
    </div>
    <div class="row">                    
                <!--Grid column-->
        <div class="col-sm-8 mb-md-0 ">
            <form id="contact-form" name="contact-form" action="include/process.php" method="POST">
                        <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <label for="name" class="">Votre Nom</label>
                                    <input type="text" id="name" name="name" class="form-control" value="" required>
                                    
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <label for="email" class="">Votre Email<span class="text-danger"></span></label>
                                    <input type="text" id="email" name="email" class="form-control"value="" required>
                                    
                                </div>
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->
                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <label for="subject" class="">Sujet</label>
                                    <input type="text" id="subject" name="subject" class="form-control" value="" required>
                                    
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->
                        <!--Grid row-->
                        <div class="row">
                           <!--Grid column-->
                            <div class="col-md-12">
                                <div class="md-form">
                                    <label for="message">Votre Message</label>
                                    <textarea type="text" id="message" name="body" rows="5" class="form-control md-textarea" value="" required></textarea>                                    
                                </div>

                            </div>
                        </div>
                        <!--Grid row-->
                      <div class="btn-submit">
                        <input class="btn-contact " type="submit"value="Envoyer Votre Message">
                      </div>

                    </form>
                  <br><br>
                  
                </div>
                <!--Grid column-->

                <div class="col-sm-4 contact-map">
                <iframe class="contact-map" src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d3374.1974271354925!2d-8.533707514937635!3d32.252769917837895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d32.2527471!2d-8.5356028!4m5!1s0xdaee32c3619a551%3A0x1b36452ccef5c343!2zSGF5IEFsIEtvZHMsINin2YTZitmI2LPZgdmK2Kk!3m2!1d32.252778!2d-8.5362071!5e0!3m2!1sar!2sma!4v1600043823663!5m2!1sar!2sma" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                </iframe>
              </div>
          </div>


        </section>
  <!-- End Section Contact -->

<!-- begin footer -->
<?php
require('template/footer.php');
?>
<!-- End footer -->


