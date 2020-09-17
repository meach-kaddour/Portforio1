
<!DOCTYPE html>
<html>
<head>
<title>Login To Admin Panel</title>
 

<!-- Bootstrap core CSS -->
<link href="css/boot.css" rel="stylesheet">
<!-- custom CSS link -->
 <!-- <link href="../css/adminstyle.css" rel="stylesheet">
 <link href="../css/style.css" rel="stylesheet"> -->

<style>
    body{
        background:#ffffff;
    }
    .col-sm-4{
        margin:auto;
        width:50%;
    }
    .text-center{
        margin-bottom:3em;
    }
</style>   
</head>
<body>       
    
    <div class="container-fluid">
        <div class="row">    
        <!-- End aside area -->
            <div class="col-sm-4 ">
                    <!-- <?php
                        // echo Message(); 
                        // echo successMessage();
                    ?> -->
                    <br><br><br><br>
                    <h2 class="text-center">Login</h2>
                    <hr>
                    
                    <br> 
<?php
//  echo htmlspecialchars($_SERVER['PHP_SELF']); 
 ?>
                        <div>
                        <form action="include/chek.php" method="POST">
                                <fieldset>
                                <div class="form-group">
                                <label for="username"><span class="fieldInfo">Username :</span></label>
                                
                                <input class ="form-control" type="text" name="username" id="username"placeholder="Username" required>                                
                                </div>
                                <div class="form-group">
                                <label for="Password"><span class="fieldInfo">Password:</span></label>
                                <input class ="form-control" name="Password" id="Password" type="Password" placeholder="Password" required>
                                
                                </div>
                                
                                
                                <br>
                                <input class="btn btn-success btn-block" type="submit" name="submit" value="Login">
                                </fieldset>

                        </form>
                        </div>
                        <br>
                        
            </div>
        </div>


    </div>
    <br><br><br><br>
    


<!-- JS, Popper.js, and jQuery -->
<script src="js/scriptjs"></script>
</body>
</html>
 
