<?php
   require 'config.php';
   include 'functions.php';
   if (!isset($_SESSION['un'])) {header("location:login.php"); exit();}
   $id=$_POST['id'];
    if(isset($_POST['supp']))
    {
        $connect->exec("delete from vetements where id = '$id'; ");
       header("location:index.php");
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
				<form method="post" action="modifier_vet.php" enctype="multipart/form-data">
				<div class="panel-body">
					<div class="row">
                        <?php
                            $req = $connect->prepare('select * from vetements where id = :id');
                            $req->execute(array(':id' => $id));
                            while ($r = $req->fetch()):
                        ?>
						<div class="col-md-4">
							<div class="text-center spacer">
								<img src="uploads/<?php echo htmlspecialchars($r['Image'])?>" class="img person" alt="user Image" width="200" height="200">
							</div>
                            <br>
							<div class="text-center spacer">
								<label class="btn btn-info">
	             					Modifier la photo <input type="file" name="fileToUpload" style="display:none">
	            				</label>
							</div>
						</div><br>
						<div class="col-md-7 spacer">
							<div class="input-group">
							      <span class="input-group-addon">Titre</span>
                                 <input type="hidden" name="idf" value="<?php echo htmlspecialchars($r['id']) ?>">
							      <input type="text" class="form-control" name="Titre" value="<?php echo htmlspecialchars($r['Titre']);?>" >
							</div><br>
							<div class="input-group">
							      <span class="input-group-addon">Tissu</span>
							      <input type="text" class="form-control" name="Tissu" value="<?php echo htmlspecialchars($r['Tissu']);?>">
							</div><br>
							<div class="input-group">
							      <span class="input-group-addon">Sexe</span>
							      <input type="text" class="form-control border-warning" name="Sexe"  value="<?php echo htmlspecialchars($r['Sexe']);?>">
							</div><br>
							<div class="input-group">
							      <span class="input-group-addon">Quantite</span>
							      <input type="text" class="form-control" name="Quantite" value="<?php echo htmlspecialchars($r['Quantite']);?>">
							</div><br>
                            <div class="input-group">
							      <span class="input-group-addon">Prix</span>
							      <input type="text" class="form-control" name="Prix" value="<?php echo htmlspecialchars($r['Prix']);?>">
							</div>
						</div>

					</div>
				</div>
				<div class="panel-footer">
					<div class="text-center">
						<input class="btn btn-info" type="submit" value="Modifier" name="save">
					</div>
                    </div>
                                    <?php endwhile; ?>

				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>
