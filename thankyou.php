<?php include('config.php');
if($_SESSION['email']){ ?>
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
<script src="js/mask-jquery.js"></script>
<script src="js/custom.js"></script>

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
	
<div class="wrapper_front"> 
  
  <!--------------------------------Header end---------------------------------->
  
  <main class="background_container">
  <section class="form_step_sec">
    <div class="container">
    <div class="row">
      <div class="main_title">
        <h2>Get Started</h2>
        <form method="post"><input type="submit" name='logout'  class="logout" value='Logout'></form>
      </div>
    </div>
  </section>
  
  <p style="padding:20px;    float: left;     font-size: 20px;">Thank you for Submitting request.</p>
  
</div>
</body>
</html>
<?php }
else { header('location: /'); }

?>
