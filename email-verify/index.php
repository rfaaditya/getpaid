<div style="width:75%;margin:50px auto;">
	<form>
		Email: <input required type="email" size="60" name="email" value="<?php if(isset($_REQUEST['email'])){ echo $_REQUEST['email'];} ?>" /> &nbsp;&nbsp;
		<input type="checkbox" name="debug" value="yes" /> Show debug info? &nbsp;&nbsp;&nbsp;&nbsp
		<input type="submit" />
		
	</form>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$from_email = 'info@reinforcewebsol.com';
if(isset($_REQUEST['email']) && $_REQUEST['email']){
	include 'VerifyEmail.php';
	$ve = new VerifyEmail($_REQUEST['email'], $from_email);
	if($ve->verify()){
		echo '<span style="color:green">Email Exists </span>';
	} else {
		echo '<span style="color:red">Email not Exists </span>';
	}
	echo '<pre>';print_r($ve->get_debug());
}
?>

</div>
