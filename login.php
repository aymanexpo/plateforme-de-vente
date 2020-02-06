<?php
echo "<body style='background: no-repeat center/100% url(uploads/bg.jpg)'
>";
require 'config.php';
if(isset($_POST['login']))
     {
		$errMsg = '';
		// Get data from FORM
		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == '')
			$errMsg = 'Entrez un nom d utilisateur';
		if($password == '')
			$errMsg = 'Entrez un mot de passe';

		if($errMsg == '')
          {
			try
               {
				$stmt = $connect->prepare('SELECT * FROM user WHERE username = :username');
				$stmt->execute(array(':username' => $username));
				$data = $stmt->fetch(PDO::FETCH_ASSOC);

				if($data == false)
                    {
					$errMsg = "Utilisateur $username introuvable.";
				}
				else
                    {
					if($password == $data['pwd'])
                         {
                            $_SESSION['id']= $data['id'];
						    $_SESSION['un'] = $data['username'];
						    $_SESSION['password'] = $data['pwd'];
                            $_SESSION['role'] = $data['role'];
                            if($_SESSION['role'] == 'admin')
                                header('Location: index.php');
                            else
                                header('Location: index.php');
						    exit;
					     }
					else
						$errMsg = 'Le mot de passe est incorrect.';
				}
			}
			catch(PDOException $e) {
				$errMsg = $e->getMessage();
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap/css/log.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
    <?php
        if(isset($errMsg))
        {
            echo '<script type="text/javascript">alert("'.$errMsg.'");</script>';
        }
    ?>
<div class="wrapper fadeInDown" style="background-image: url('../uploads/back2.jpg');">
  <div id="formContent">
      <div class="fadeIn first">
        <h2>authentification</h2>
      </div>


	<form method="post" action="">
          <input type="text" id="login" class="fadeIn second" name="username" placeholder="nom d'utilisateur" >
          <input type="password" id="password" class="fadeIn third" name="password" placeholder="mot de passe" >
            <br><br>
          <div class="row">
            <input type="submit" name="login" class="btn btn-info" value="Se connecter">
            <input type="reset" class="btn btn-info" value="Annuler">
          </div>
            <br><br>
    </form>
  </div>
</div>
</body>
</html>
