<?php include('config.php');
if(isset($_POST['Sign-In'])){
				$email = $_POST['email'];
				$password = $_POST['password'];
				
				$stmt = $conn->prepare("SELECT email, id FROM users where email = '$email' AND password = '$password'"); 
					$stmt->execute();

				// set the resulting array to associative
				$result = $stmt->fetchAll(); 
				if(!empty($result)){
					
					header('location: '.$base_url);
					$_SESSION['email'] = $email;
				}
				else{
					$msg = "Email and Password does not match";
				}
				
				
		}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="../../assets/ico/favicon.ico">
<title>Welcome to ....</title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="js/respond.min.js"></script>
<!-- Bootstrap core CSS -->
<!-- Custom styles for this template -->

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body class="front">

<div class="welcome_wrapper">
<div class="wrp_inner">
<div class="color_box">
	<?php if($_SESSION['email']){ ?>
		<div class="start-txt">
			<h2>Welcome to</h2> <h1>Athena</h1>
			<a href="questionnaire.php">Enter Here</a>
		</div>
	<?php }
	else{  ?>



	<div class="contact-form">
	<!-- start-form -->
	<?php if(isset($msg)){ echo "<p style='text-align: left; color:red;'>".$msg."</p>"; } ?>
		<form class="contact_form" action="" method="post" name="contact_form">
			
			<h1>Login Into Your Account</h1>
			<ul>
				<li>
					<input class="textbox1" name="email" placeholder="email" required type="email">
					<span class="form_hint">Enter a valid email</span>
					 <p><img src="images/contact.png" alt=""></p>
				</li>
				<li>
					<input name="password" class="textbox2" placeholder="password" type="password">
					<p><img src="images/lock.png" alt=""></p>
				</li>
			 </ul>
				<input name="Sign-In" value="Sign In" type="submit">
				<div class="clear"></div>	
				<label class="checkbox"><input name="checkbox" checked="" type="checkbox"><i></i>Remember me</label>
			<div class="forgot">
				<a href="#">forgot password?</a>
			</div>	
			<div class="clear"></div>	
		</form>
		<!-- end-form -->
		<!-- start-account -->
		<div class="account">
			<h2><a href="#">Don't have an account? Sign Up!</a></h2>
			<div class="span"><a href="login-with.php?provider=Facebook"><img src="images/facebook.png" alt=""><i>Sign In with Facebook</i><div class="clear"></div></a></div>	
			
			<div class="span2"><a href="login-with.php?provider=Google"><img src="images/gplus.png" alt=""><i>Sign In with Google+</i><div class="clear"></div></a></div>
		</div>	
		<!-- end-account -->

	<div class="clear"></div>	
	</div>
	<?php } ?>
</div>
</div>
</div>




</body>
</html>
