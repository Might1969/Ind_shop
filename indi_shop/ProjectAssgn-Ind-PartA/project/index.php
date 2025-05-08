<?php 
session_start();

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
    $user_id = $_COOKIE['user_id'];
}else{
    setcookie('user_id', create_unique_id(), time() + 60*60*24*30);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>DC228428 Zhang JiaQi</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/header.php'; ?>

<section class="index-login">
	<div class="wrapper">		
		<div class="index-login-login g-form">
			<form action="includes/login.inc.php" method="post">
				<h3>LOGIN</h3>
				<input type="text" name="uid" placeholder="Username" class="box">
				<input type="password" name="pwd" placeholder="Password" class="box">				
				<br>
				<button type="submit" name="submit" class="btn">LOGIN</button>
				<h3><br>No account yet?</h3>
				<a href="signup.php">SIGN UP</a>
			</form>
		</div>
	</div>

</section>

<footer><h1>DC228428 Zhang JiaQi</h1></footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<script src="js/script.js"></script>

<?php include 'components/alert.php'; ?>

</body>
</html>