<?php
   require 'config.php';
   include 'functions.php';
   if (!isset($_SESSION['un'])) {header("location:login.php"); exit();}
   $id=$_POST['id'];
?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .input-group-addon
        {
           width: 35%;
        }
    </style>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<title>Produi</title>
</head>
<body>

<div class="container">
<?php    nav($_SESSION['role'],$_SESSION['un']); ?>
<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info spacer bg-primary">
				<div class="panel-heading text-center">Profile</div>
				<form method="post" action="modifier.php">
				<div class="panel-body">
					<div class="row">
                        <?php
                            $req = $connect->prepare('select * from vetements where id = :id');
                            $req->execute(array(':id' => $id));
                            while ($r = $req->fetch()):
                        ?>
						<div class="col-md-4">
							<div class="text-center spacer">
								<img src="uploads/<?php echo htmlspecialchars($r['image'])?>" class="img person" alt="user image" width="200" height="200">
							</div>
                            <br>
						</div>
						<div class="col-md-7 spacer">
							<div class="input-group">
							      <span class="input-group-addon">IdProduit</span>
                                 <input type="hidden" name="id" value="<?php echo htmlspecialchars($r['id']) ?>">
							      <input type="text" class="form-control" name="IdProduit" value="<?php echo htmlspecialchars($r['IdProduit']);?>" >
							</div><br>
							<div class="input-group">
							      <span class="input-group-addon">Libelle</span>
							      <input type="text" class="form-control" name="Libelle" value="<?php echo htmlspecialchars($r['Libelle']);?>">
							</div><br>
							<div class="input-group">
							      <span class="input-group-addon">stock</span>
							      <input type="text" class="form-control border-warning" name="stock"  value="<?php echo htmlspecialchars($r['stock']);?>">
							</div><br>
							<div class="input-group">
							      <span class="input-group-addon">Description</span>
							      <input type="text" class="form-control" name="Description" value="<?php echo htmlspecialchars($r['Description']);?>">
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
						<input class="btn btn-info" type="submit" value="Modifier" name="modifier">
						<input class="btn btn-info" type="submit" value="Supprimer" name="supp">
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
