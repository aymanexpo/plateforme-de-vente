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
	

  	<nav class="container-fluid top_menu">
	   	<div class="navbar-header">

	    	<a class="navbar-brand" href="./user_panel.php"><i class="glyphicon glyphicon-education"></i> Admin</a>
	    </div>
	    <ul class="nav navbar-nav">
	    	<li class="active"><a href="home.php"><i class="glyphicon glyphicon-home"></i> Home</a></li>
			<li><a href="add.php"><i class="glyphicon glyphicon-user"></i> Add</a></li>
	    	<li><a href="liste.php"><i class="glyphicon glyphicon-th-list"></i> Liste</a></li>
	    </ul>
	    <ul class="nav navbar-nav navbar-right">
	    	<li><a href="../logout.php?LOGOUT=1"><i class="glyphicon glyphicon-log-in"></i> Se déconnecter</a></li>
	    </ul>
	</nav>
<div class="row">
		<div class="col-md-12"> 
			<div class="panel panel-info spacer bg-primary">
				<div class="panel-heading text-center">Profile</div>
				<form method="post" action="edit.php?id=<?php echo $_GET['id'];?>" enctype="multipart/form-data">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-4">
							<div class="text-center spacer">
								<img src="<?php echo '../uploads/'.$tab['image'];?>" class="img-circle person" alt="user image" width="200" height="200">
							</div>
                            <br>
						</div>
						<div class="col-md-7 spacer">
							<div class="input-group">
							      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							      <input type="text" class="form-control" name="first_name" value="<?php echo $tab['last_name']; ?>" >
							</div><br>
							<div class="input-group">
							      <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
							      <input type="text" class="form-control" name="last_name" value="<?php echo $tab['first_name']; ?>">
							</div><br>
							<div class="input-group">
							      <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
							      <input type="text" class="form-control border-warning" name="CNE"  value="<?php echo $tab['CNE']; ?>">
							</div><br>
							<div class="input-group">
							      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
							      <input type="text" class="form-control" name="email" value="<?php echo $tab['email']; ?>">
							</div>
						</div>

					</div>
				</div>
				<div class="panel-footer">
					<div class="text-center">
						<input class="btn btn-info" type="submit" value="Modifier" name="save">
						<input class="btn btn-info" type="submit" value="Supprimer">
					</div>
                    </div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php 
user_footer();
?>