<?php
include ('session.php');
if(isset($_POST["submit"]) && !empty($_POST["username"]) && !empty($_POST["Password"]))
    {
        $username = $_POST["username"];
        $Password = $_POST["Password"];
        
    require 'connection.php';
        $db = Database::connect();       
        $Query="SELECT *FROM admins WHERE adminName='$username'";
        $Execute = $db->query($Query);
        foreach ($Execute as $row){
            $idAdmin=$row['id'];
            $name=$row['adminName'];
            $pass=$row['passcode'];
            $action=$row['action'];
        }
        
        
        if ($_POST['username'] == $name && $_POST['Password'] == $pass) 
            {
                    $_SESSION['username'] = $name;
                    $_SESSION["successMessage"]= "Login succesful";
                    Redirect_to("../admin/dash.php");
                
            }
            else 
            {
                    $_SESSION["ErrorMessage"]= "Invalid compte";
                    Redirect_to("../login.php");
                   
            }

    }
else{
    $_SESSION["ErrorMessage"]="Please chek nom and password";
    Redirect_to("../login.php");
}