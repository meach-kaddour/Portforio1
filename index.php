<?php
require('template/header.php');
?>
 
<!--   End header -->
<section id="technologies">
<div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2>Technologies Maitrisé</h2>
        <hr class="star-primary"></hr>       
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
       
        <section id="slideshow">
          <div class="entire-content">
            
              <div class="content-carousel">
                <!-- Php here -->
                <?php
                    global $db;
                    $Query="SELECT *FROM technologies LIMIT 5 ";
                    $Execute = $db->query($Query);
                    
                                    
                    foreach ($Execute as $execute){
                      $idTechno=$execute['id_technologies'];
                      $nameTechno=$execute['name_technologies'];
                      $imageTechno=$execute['image_technologies'];
                      $niveauTechno=$execute['niveau_technologies'];
                    

                ?>
                <!--  -->
                
                  <figure class="shadow"><img src="admin/upload/<?php echo $imageTechno; ?>" alt="Caption 1"/></figure>
                  <!-- <figure class="shadow"><img src="https://images.pexels.com/photos/68704/pexels-photo-68704.jpeg?cs=rgb" alt="Caption 2"/></figure>
                  <figure class="shadow"><img src="https://images.pexels.com/photos/2749090/pexels-photo-2749090.jpeg?cs=rgb" alt="Caption 3"/></figure>
                  <figure class="shadow"><img src="https://images.pexels.com/photos/2319032/pexels-photo-2319032.jpeg?cs=rgb" alt="Caption 4"/></figure>
                 <?php }?> <figure class="shadow"><img src="https://images.pexels.com/photos/2319032/pexels-photo-2319032.jpeg?cs=rgb" alt="Caption 4"/></figure> -->
              </div>
                    
          </div>
        </section>
       
      </div>
    </div>





</div>
</section>

<!--   Startn section projects -->
<section id="project">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2>Projects</h2>
        <hr class="star-primary"></hr>       
      </div>
    </div>
    <div class="row">
    <?php
        global $db;
        $Query="SELECT *FROM projects LIMIT 6 ";
        $Execute = $db->query($Query);
        
                         
        foreach ($Execute as $execute){
          $idProjet=$execute['id_projet'];
          $nameProjet=$execute['name_projet'];
          $imageProjet=$execute['image_projet'];
          $descriptionProjet=$execute['description_projet'];
          $slug=$execute['slug'];
        

    ?>

      <div class="col-md-4">
        <div class="card shadow-sm p-3 mb-5  
            bg-white rounded">
          <img src="admin/upload/<?php echo $imageProjet; ?>" class="card-img-top" alt="screen Project">
          <div class="card-body">
            <h5 class="card-title"><?php echo $nameProjet;?></h5>
            <p class="card-text">
             <?php
               if(strlen($descriptionProjet) >60)
                  {
                    $descriptionProjet=substr($descriptionProjet,0,80)."..";
                  }
                echo htmlentities($descriptionProjet) ;
             ?>
            </p>
          </div>
          <div class="card-footer">
            <p ><a class=" text-dark" href="<?php echo $slug;?> target="_blank">View Project</a></p>
          </div>
        </div>
      </div>    
    
    <br><br>
    <?php } ?> 
  </div>
  
</section>
<!--   End section projects -->
<!--   Start section  about -->
<section id="about" class="success text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2>About</h2>
        <hr class="star-light"></hr>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4 col-md-offset-1">
      <p class="text-profil">Bonjour, je suis Kaddour Meach Nouveau Apprenant dans le domaine du web. <br>J’ai acquis les compétences de base nécessaire du développement Web, Grace a l'auto-formation que je prend à YouCode ,je suis à la recherche d'un stage pour Améliorer mes compétences professionnelles, mes capacités et mes connaissances dans une organisation qui reconnaît la valeur du travail acharné et qui me confie des responsabilités et des défis. </p>
    </div>
    <div class="col-md-4 col-md-offset-1">
      <p class="text-profil">Pourquoi devriez-vous me choisir?<br>
                Je travaille dur, j'aime apprendre de nouvelles choses, je suis attentif aux détails, ponctuel, j'aime travailler en équipe, orienté sur le développement personnel. Enfin, je souhaite travailler dans une entreprise en pleine croissance, qui se concentre sur les nouvelles technologies, avec lesquelles je vais me développer, et contribuer au développement de l'entreprise.</p>
    </div>
    <div class="clearfix"></div>
    <div class="col-md-2 btns-social">
        <div class="col-md-3 col-sm-3 col-xs-2">
          <a href="img/cv.pdf" class="btn btn-lg-social btn-success btn-responsive">
            <i class=" img-icon-about fa fa-fire"> Télecharger CV</i> 
          </a>
        </div>
        <br>
        <div class="col-md-3 col-sm-3 col-xs-2">
          <a href="https://github.com/meach-kaddour" target="_blank" class="btn btn-lg-social btn-warning btn-responsive">
            <i class=" img-icon-about fa fa-github"> GitHub</i> 
          </a>
        </div>
        <br>
        <div class="col-md-3 col-sm-3 col-xs-2">
          <a href="https://www.linkedin.com/in/kaddour-meach-923300178/" target="_blank" class="btn btn-lg-social btn-dark btn-responsive">
            <i class=" img-icon-about fa fa-linkedin"> LinkdIn</i> 
          </a>
        </div>
        <br>
        <div class="col-md-3 col-sm-3 col-xs-2">
          <a href="https://www.facebook.com/skoma.maache" target="_blank" class="btn btn-lg-social btn-primary btn-responsive">
            <i class=" img-icon-about fa fa-facebook-official"> Facebook</i> 
          </a>
        </div>
  </div>
  </div>
  
</section>
<!--   end section about -->
<!--   Start  section contact -->

        <section id="contact" class="mb-4">
          <div class="container">
            <!--Section heading-->
            <h2>Contacter-Moi</h2>
            <hr class="star-primary"></hr> 
            
            <div class="row">
              
                    <?php 
                                $name = $subject = $email = $message = "";
                                $nameErr = $subjectErr = $emailErr = $messageErr = "";

                                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                                    if(empty($_POST['name'])){
                                        $nameErr = "Name is required";
                                    }else {
                                        $name = test_input($_POST["name"]);
                                        // check if name 
                                        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                                        $nameErr = "Only letters and white space allowed";
                                        }
                                    }
                                    if (empty($_POST["email"])) {
                                        $emailErr = "Email is required";
                                      } else {
                                        $email = test_input($_POST["email"]);
                                        // check if e-mail address is well-formed
                                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                          $emailErr = "Invalid email format";
                                        }
                                      }
                                    if (empty($_POST["subject"])) {
                                        $subject = "";
                                    } else {
                                        $subject = test_input($_POST["subject"]);
                                    }
                                    if (empty($_POST["body"])) {
                                        $message = "";
                                    } else {
                                        $message = test_input($_POST["body"]);
                                    }

                                    
                                    $email_from = 'blog-php@gmail.com';
                                    $email_subject = "New form submission";
                                    $email_body = "User Name: $name.\n".
                                                        "User Email: $email.\n".
                                                            "User subject: $subject.\n".
                                                                "User Message: $message.\n";
                                    $to = "meachkaddour1@gmail.com";
                                    $headers = "From: $email_from \r\n";
                                    $headers .= "Reply-To: $email \r\n";
                                    mail($to,$email_subject,$email_body,$headers);

                                }
                                function test_input($data) {
                                    $data = trim($data);
                                    $data = stripslashes($data);
                                    $data = htmlspecialchars($data);
                                    return $data;
                                  }
                    ?>
                <!--Grid column-->
                <div class="col-sm-8 mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <label for="name" class="">Your name<span class="text-danger"><?php echo $nameErr;?></span></label>
                                    <input type="text" id="name" name="name" class="form-control" value="<?php echo $name;?>" >
                                    
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <label for="email" class="">Your email<span class="text-danger"><?php echo $emailErr;?></span></label>
                                    <input type="text" id="email" name="email" class="form-control"value="<?php echo $email;?>" >
                                    
                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <label for="subject" class="">Subject<span class="text-danger"><?php echo $subjectErr;?></span></label>
                                    <input type="text" id="subject" name="subject" class="form-control" value="<?php echo $subject;?>">
                                    
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12">

                                <div class="md-form">
                                    <label for="message">Your message<span class="text-danger"><?php echo $messageErr;?></span></label>
                                    <textarea type="text" id="message" name="body" rows="5" class="form-control md-textarea" value="<?php echo $message;?>"></textarea>
                                    
                                </div>

                            </div>
                        </div>
                        <!--Grid row-->

                    </form>
                  <br><br>
                  <div class="text-center text-md-left">
                      <a class=" btn-contact btn  btn-lg text-light" onclick="document.getElementById('contact-form').submit();">Envoyer Votre Message</a>
                  </div>
                </div>
                <!--Grid column-->

                <div class="col-sm-4">
                  <div class="col-md-12 text-center">
                    <ul class="list-unstyled mb-0 address">
                      <br><br>

                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>
                            <p class="text-dark">Youussoufia, 46300, Maroc</p>
                        </li>
                        <br><br>

                        <li><i class="fa fa-phone address"></i> 
                        <p class="text-dark">+ 212 626 307 361</p>
                        </li>
                              <br><br>
                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <p class="text-dark">meachkaddour@gmail.com</p>
                        </li>
                    </ul>
                </div>
              </div>
            </div>


        </section>
  <!-- End Section Contact -->

<!-- begin footer -->
<?php
require('template/footer.php');
?>
<!-- End footer -->


