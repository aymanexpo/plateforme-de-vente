<?php
   require 'config.php';
   include 'functions.php';

   $Titre = $_POST['Titre'];
   $Tissu = $_POST['Tissu'];
   $Sexe  = $_POST['Sexe'];
   $Quantite = $_POST['Quantite'];
   $Prix = $_POST['Prix'];
   $dir = "uploads/";
   $Image="fileToUpload";
   $img=basename($_FILES["fileToUpload"]["name"]);
   upload($dir,$Image);
   $connect->exec("INSERT INTO vetements (id,Titre,Tissu,Sexe,Quantite,Prix,Image) values (null,'$Titre','$Tissu','$Sexe','$Quantite','$Prix','$Image')");
   header('location:index.php');
?>
