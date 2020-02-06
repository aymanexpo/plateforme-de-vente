<?php
    require 'config.php';
    include 'functions.php';
    $_SESSION['id']=$_POST['idf'];
    $dir = "uploads/";
    $Image="fileToUpload";
    $id=$_POST['idf'];
    $Titre=$_POST['Titre'];
    $Tissu=$_POST['Tissu'];
    $Sexe=$_POST['Sexe'];
    $Quantite=$_POST['Quantite'];
    $Prix=$_POST['Prix'];
    $img=basename($_FILES["fileToUpload"]["name"]);
   if(isset($_POST['save']))
   {
       upload($dir,$Image);
       $connect->exec("UPDATE vetements set Titre='$Titre', Tissu='$Tissu', Sexe ='$Sexe', Quantite='$Quantite', Image='$Image' where id='$id'; ");
       header("location:index.php");
   }
?>
