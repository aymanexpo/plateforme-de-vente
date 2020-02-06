<?php
   require 'config.php';
   include 'functions.php';
   if (!isset($_SESSION['un'])) {header("location:login.php"); exit();}
   $id=$_POST['id'];  
 if(isset($_POST['suppU']))
    {
        $connect->exec("delete from user where id = '$id'; ");
       header("location:index.php");
    }
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
	<title></title>
</head>
<body>

<div class="container">
<?php    nav($_SESSION['role'],$_SESSION['un']); ?>
<div class="row">
		<div class="col-md-12"> 
			<div class="panel panel-info spacer bg-primary">
				<div class="panel-heading text-center">Utilisateurs</div>
				<form method="post" action="modifier-utilisateurs.php">
				<div class="panel-body">
					<div class="row">
                        <?php
                            $req = $connect->prepare('select * from user where id = :id');
                            $req->execute(array(':id' => $id));
                            while ($r = $req->fetch()):
                        ?>
						<div class="col-md-7 spacer">
							<div class="input-group">
							      <span class="input-group-addon">Nom d'utilisateur</span>
                                  <input type="hidden" name="id" value="<?php echo htmlspecialchars($r['id']) ?>">
							      <input type="text" class="form-control" name="titre" value="<?php echo htmlspecialchars($r['username']);?>" readonly >
							</div><br>
							<div class="input-group">
							      <span class="input-group-addon">Mot de passe</span>
							      <input type="password" class="form-control" name="realisateur" value="<?php echo htmlspecialchars($r['pwd']);?>" readonly>
							</div><br>
							<div class="input-group">
							      <span class="input-group-addon">Role</span>
							      <input type="text" class="form-control border-warning" name="genre"  value="<?php echo htmlspecialchars($r['role']);?>" readonly>
							</div><br>
						</div>

					</div>
				</div>
				<div class="panel-footer">
					<div class="text-center">
						<input class="btn btn-info" type="submit" value="Modifier" name="modifier">
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