<?php 

include('config.php');

if(isset($_POST['name'])){
	$name = $_POST['name'];

	$stmt = $conn->prepare("SELECT DISTINCT county FROM us_cities WHERE state_code = '$name'"); 
		$stmt->execute();
		// set the resulting array to associative
		$result = $stmt->fetchAll();
		foreach($result as $k=>$v) { 
			$option .= "<option value='".$v['county']."'>".$v['county']."</option>";
		}
		if(isset($option)){
			echo $option;
		}
		else{
			echo "<option value='none'>No county found</option>";
		}

}	
	
	
if(isset($_POST['state'])){
	$state = $_POST['state'];

	$stmt = $conn->prepare("SELECT DISTINCT name FROM us_cities WHERE (type = 'City' or type = 'town') and state_code = '$state'"); 
		$stmt->execute();
		// set the resulting array to associative
		$result = $stmt->fetchAll();
		foreach($result as $k=>$v) { 
			$option .= "<option value='".$v['name']."'>".$v['name']."</option>";
		}
		if(isset($option)){
			echo $option;
		}
		else{
			echo "<option value='none'>No county found</option>";
		}
	
}

if(isset($_POST['zip'])){
	$state = $_POST['state1'];
	$city1 = $_POST['city1'];
	$zip = $_POST['zip'];

	$stmt = $conn->prepare("SELECT DISTINCT zip_codes FROM us_cities WHERE name = '$city1' and state_code = '$state'"); 
		$stmt->execute();
		// set the resulting array to associative
		$result = $stmt->fetchAll();
		
		
		if($result[0]['zip_codes'] == $zip){
			echo "<p style='color:green'>Valid</p>";
		}
		else{
			echo "<p style='color:red'>Zip code not valid</p>";
		}
	
}

if(isset($_POST['email'])){
	
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	$from_email = 'pawan.developers@gmail.com';
	
	include 'VerifyEmail.php';
	$ve = new VerifyEmail($_POST['email'], $from_email);
	
	
	if($ve->verify()){
		echo '<span style="color:green">Email Exists </span>';
	} else {
		echo '<span style="color:red">Email not Exists </span>';
	}
	echo '<pre>';print_r($ve->get_debug());
}


	
	die;		
?>
