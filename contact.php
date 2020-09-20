<!-- Start header -->
<?php
require('template/header.php');
?>
<!--   End header -->

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
<!-- start footer -->
<?php
require('template/footer.php');
?>
<!-- End footer -->
