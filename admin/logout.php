<?php
   session_start();
   unset($_SESSION["login_admin"]);
   header("location:../admin/dash.php");
   header("location:../");
?>