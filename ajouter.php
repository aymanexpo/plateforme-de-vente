<?php
   require 'config.php';
   include 'functions.php';
   if (!isset($_SESSION['un'])) {header("location:login.php"); exit();}
   if(isset($_POST['ajou']))
   {
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
   }
?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<title></title>
</head>
<body>

<div class="container">

<?php
    nav($_SESSION['role'],$_SESSION['un']);
?>
<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info spacer bg-primary">
				<div class="panel-heading text-center">Produit</div>
				<form method="post" action="ajouter-vet.php" enctype="multipart/form-data">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-4">
							<div class="text-center spacer">
								<img src="https://upload.wikimedia.org/wikipedia/en/e/ee/Unknown-person.gif" class="img person" alt="user image" width="200" height="200">
							</div>
                            <br>
							<div class="text-center spacer">
								<label class="btn btn-info">
	             					Ajouter une photo<input type="file" name="fileToUpload" style="display:none">
	            				</label>
							</div>
						</div><br>
						<div class="col-md-7 spacer">
							<div class="input-group">
							      <span class="input-group-addon">Titre</span>
							      <input type="text" class="form-control" name="Titre" value="" >
							</div><br>
							<div class="input-group">
							      <span class="input-group-addon">Tissu</span>
							      <input type="text" class="form-control" name="Tissu" value="">
							</div><br>
							<div class="input-group">
							      <span class="input-group-addon">Sexe</span>
							      <input type="text" class="form-control border-warning" name="Sexe"  value="">
							</div><br>
							<div class="input-group">
							      <span class="input-group-addon">Quantite</span>
							      <input type="text" class="form-control" name="Quantite" value="">
							</div><br>
                            <div class="input-group">
							      <span class="input-group-addon">Prix</span>
							      <input type="text" class="form-control" name="Prix" value="">
							</div>
						</div>
					</div>
				</div>
				<div class="panel-footer">
					<div class="text-center">
						<input class="btn btn-info" type="submit" value="Ajouter" name="ajou">
					</div>
                    </div>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>
