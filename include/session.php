<?php
session_start();
// include("include/config.php");
// include("include/db.php");



// $user_check = $_SESSION['login_admin'];
   
// $ses_sql = mysqli_query($db,"select adminName from admins where adminName = '$user_check' ");
   
// $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
// $login_session = $row['adminName'];


// if(!isset($_SESSION['login_admin'])){
//     header("location:../login.php");
// }

function Message(){
    if(isset($_SESSION["ErrorMessage"])){
        $output="<div class=\"alert alert-danger\">";
        $output.=htmlentities($_SESSION["ErrorMessage"]);
        $output.="</div>";
        $_SESSION["ErrorMessage"]=null;
        return$output;

    }
}
function successMessage(){
    if(isset($_SESSION["successMessage"])){
        $output="<div class=\"alert alert-success\">";
        $output.=htmlentities($_SESSION["successMessage"]);
        $output.="</div>";
        $_SESSION["successMessage"]=null;
        return$output;
        
    }
}
function Redirect_to($New_Location){
        header("Location:".$New_Location);
            exit;
    }
?>