<?php
require('template/header.php');
?>
 
<!--   end header -->

<!--   begin portfolio -->
<section id="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2>Projects</h2>
        <hr class="star-primary"></hr>       
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="card">
          <img src="img/homepage.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Blog CMS </h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card-footer">
            <small class="text-white-50 bg-dark">Html - CSS - PHP-Bootstrap</small>
          </div>
        </div>
    </div>    
    <div class="col-md-4">
        <div class="card">
          <img src="img/homepage.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card-footer">
            <small class="text-white-50 bg-dark">Html - CSS - PHP-Bootstrap</small>
          </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
          <img src="img/homepage.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card-footer">
            <small class="text-white-50 bg-dark">Html - CSS - PHP-Bootstrap</small>
          </div>
        </div>
    </div>
    <div class="clearfix"></div>
    
  </div>
  
</section>
<!--   end portfolio -->
<!--   begin about -->
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
      <p class="text-profil">Hello, my name is Robert and I'm Software Developer.<br> I know following web development technologies: HTML, CSS, Javascript, Bootstrap, jQuery, Angular 2, Node.js, Ionic, JSON, AJAX, MySQL, Responsive layouts, Git version control, Linux, Photoshop.</p>
    </div>
    <div class="col-md-4 col-md-offset-1">
      <p class="text-profil">Why should you choose me?<br>
I am a hard working, love to learn new things, I am attentive to detail, punctual, I like to work in a team, Oriented on self-development.
Finally, I want to work in a growing company, that focuses on new technologies, with which I will develop, and contribute to the development of the company.</p>
    </div>
    <div class="clearfix"></div>
    <div class="col-md-2 btns-social">
        <div class="col-md-3 col-sm-3 col-xs-2">
          <a href="https://www.freecodecamp.com/rob777" target="_blank" class="btn btn-lg btn-success btn-responsive">
            <i class="fa fa-fire"> FreeCodeCamp</i> 
          </a>
        </div>
        <br>
        <div class="col-md-3 col-sm-3 col-xs-2">
          <a href="https://github.com/robertoganiani" target="_blank" class="btn btn-lg btn-warning btn-responsive">
            <i class="fa fa-github"> GitHub</i> 
          </a>
        </div>
        <br>
        <div class="col-md-3 col-sm-3 col-xs-2">
          <a href="https://www.linkedin.com/in/robert-oganiani-2033b6a2?trk=nav_responsive_tab_profile_pic" target="_blank" class="btn btn-lg btn-dark btn-responsive">
            <i class="fa fa-linkedin"> LinkdIn</i> 
          </a>
        </div>
        <br>
        <div class="col-md-3 col-sm-3 col-xs-2">
          <a href="https://www.facebook.com/robert.oganiani" target="_blank" class="btn btn-lg btn-primary btn-responsive">
            <i class="fa fa-facebook-official"> Facebook</i> 
          </a>
        </div>
  </div>
  </div>
  
</section>
<!--   end about -->
<!--   begin contact -->
<section id="contact">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2>Contact me</h2>
        <hr class="star-primary"></hr>          
    </div>
  </div>
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <form name="sentMessage" id="contactForm" novalidate="">
        <div class="row control-group">
          <div class="form-group col-xs-12 floating-label-form-group controls">
            <label>Name</label>
            <input class="form-control" placeholder="Name" id="name" required="" data-validation-required-message="Please enter your name." type="text">
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="row control-group">
          <div class="form-group col-xs-12 floating-label-form-group controls">
            <label>Email Address</label>
            <input class="form-control" placeholder="Email Address" id="email" required="" data-validation-required-message="Please enter your email address." type="email">
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="row control-group">
          <div class="form-group col-xs-12 floating-label-form-group controls">
            <label>Phone Number</label>
            <input class="form-control" placeholder="Phone Number" id="phone" required="" data-validation-required-message="Please enter your phone number." type="tel">
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="row control-group">
          <div class="form-group col-xs-12 floating-label-form-group controls">
            <label>Message</label>
            <textarea rows="5" class="form-control" placeholder="Message" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <br>
        <div id="success"></div>
        <div class="row">
          <div class="form-group col-xs-12">
            <button type="submit" class="btn btn-success btn-lg">Send</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  </div>
</section>
<!--   end contact -->
<!-- begin footer -->
<?php
require('template/footer.php');
?>

