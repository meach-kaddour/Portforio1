<?php
session_start();

if(isset($_POST['submit']))
{
    $admin=$_POST['username'];
    $pass=$_POST['Password'];

    require 'connection.php';

    $db = Database::connect();

    $query="SELECT * FROM admins WHERE adminName='".$admin."' AND passcode='".$pass."' LIMIT 1";
    $statement=$db->query($query);
    
    if($statement==1){
        $_SESSION['admin_login']=$admin;
        header("location:../admin/dash.php");
    }else{
        echo 'wrong admin';
    }

}
