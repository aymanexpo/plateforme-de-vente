<?php
    function nav($role,$user)
    {
        if($role == 'admin')
        {
            echo '<nav class="container-fluid top_menu">
            
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php"><i class="glyphicon glyphicon-home"></i> Acceuil</a></li>
                <li><a href="ajouter.php"><i class="glyphicon glyphicon-plus"></i> Ajouter</a></li>
                <li><a href="utilisateurs.php"><i class="glyphicon glyphicon-user"></i> Utilisateurs</a></li>
                <li><a href="ajouter-utilisateur.php"><i class="glyphicon glyphicon-plus"></i>Ajouter Utilisateur</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php"><i class="glyphicon glyphicon-log-in"></i>  Se déconnecter </a></li>
            </ul>
        </nav>';
        }
        else
        {
         echo '<nav class="container-fluid top_menu">
            <div class="navbar-header">

                <a class="navbar-brand" href="#"><i class="glyphicon glyphicon-education"></i> Bienvenue '.$user.' </a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php"><i class="glyphicon glyphicon-home"></i> Acceuil</a></li>
                <li><a href="ajouter.php"><i class="glyphicon glyphicon-plus"></i> Ajouter</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php"><i class="glyphicon glyphicon-log-in"></i> Se déconnecter </a></li>
            </ul>
        </nav>';   
        }  
    }
    function upload($target_dir,$d)
    {
       $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);   
       move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
    }
?>