<?php
   require 'config.php';
   include 'functions.php';
   if (!isset($_SESSION['un'])) {header("location:login.php"); exit();}
   if(isset($_POST['au']))
   {
       $username = $_POST['un'];
       $password = $_POST['pwd'];
       $role = $_POST['role'];
       $connect->exec("INSERT INTO user (id,username,pwd,role) values (null,'$username','$password','$role')");
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
				<div class="panel-heading text-center">Profile</div>
				<form method="post" action="" enctype="multipart/form-data">
				<div class="panel-body">
					<div class="row">
						
						<div class="col-md-7 spacer">
							<div class="input-group">
							      <span class="input-group-addon">username</span>
							      <input type="text" class="form-control" name="un" value="" >
							</div><br>
							<div class="input-group">
							      <span class="input-group-addon">password</span>
							      <input type="password" class="form-control" name="pwd" value="">
							</div><br>
							<div class="input-group">
							      <span class="input-group-addon">role</span>
                                <select type="text" class="form-control border-warning" name="role"  value="">
                                    <option value="admin">Admin</option>
                                    <option value="user">Utilisateur</option>
                                </select>
							</div><br>
						</div>
					</div>
				</div>
				<div class="panel-footer">
					<div class="text-center">
						<input class="btn btn-info" type="submit" value="Ajouter" name="au">
					</div>
                    </div>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>