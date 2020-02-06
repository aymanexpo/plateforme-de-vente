<?php
    require 'config.php';
    include 'functions.php';
   if (!isset($_SESSION['un'])) {header("location:login.php"); 
  exit();}
?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <style>th, td {padding: 15px; text-align: left;}</style>
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
		<div class="panel-heading text-center">Liste des Films</div>
			<div class="panel-body">
                <?php
                    $req = $connect->prepare('Select * from user;');
                    $req->execute();
                ?>
				<table class="table table-hover" style="color: black">
					 <thead>
                            <th>Nom d'utilisateur</th>
                            <th>Mot de passe</th>
							<th>Role</th>
                            <th></th>
					</thead>
					<tbody>
                        <?php while ($r = $req->fetch()): ?>
                        
					 <tr>
                     <form method="post" action="consulter-utilisateurs.php">
                        <input type="hidden" name="id" value="<?php echo htmlspecialchars($r['id']) ?>">
                        <td><?php echo htmlspecialchars($r['username']);?></td>
					    <td><?php echo htmlspecialchars($r['pwd']);?></td>
					    <td><?php echo htmlspecialchars($r['role']);?></td>
                        <td><input type="submit" name="submit" class="btn btn-info" value="Consulter"></td>
                    </form>
				    </tr>
                        
                     <?php endwhile; ?>
				    </tbody>
				</table>
			</div>
		</div>
	</div>
</div>