<?php

 $view = "dashboard";

 include("template.php");


 session_start();
 $id = $_SESSION['sessionID'];
 if($id == null){
     header("location:index.php");
 }
   

?>