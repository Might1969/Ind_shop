<?php
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
   <title>Sign up</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/header.php'; ?>

<section class="index-login">
	<div class="wrapper">
		<div class="index-login-signup product-form">
			<form action="includes/signup.inc.php" method="post">
				<h3>SIGN UP</h3>
				<input type="text" name="uid" placeholder="Username" class="box">
				<input type="password" name="pwd" placeholder="Password" class="box">
				<input type="password" name="pwdrepeat" placeholder="Repeat Password" class="box">
				<input type="text" name="email" placeholder="E-mail" class="box">
				<br>
				<button type="submit" name="submit" class="btn">SIGN UP</button>
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