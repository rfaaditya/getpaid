<?php session_start();
include('config.php'); 

$user_mail = $_SESSION['email']; 
$stmt = $conn->prepare("SELECT email, id FROM users where email = '$user_mail'"); 
					$stmt->execute();
$result = $stmt->fetchAll(); 

$uid = $result[0]['id']; 

$are_you_owed =  $_POST['are_you_owed'];
$do_you_have_judgment =  $_POST['do_you_have_judgment'];
$cse_direct_pay =  $_POST['cse_direct_pay'];

if($cse_direct_pay == 'cse'){
	$your_case_number =  $_POST['your_case_number'];
	$county_is_that_in = $_POST['county_is_that_in'];
	$state_enforces_your_child_support_order =  $_POST['state_enforces_your_child_support_order'];
	$is_this_an_interstate_case =  $_POST['is_this_an_interstate_case'];
	$if_yes_which_state_originating_state = $_POST['if_yes_which_state_originating_state'];
	$full_address_street =  $_POST['full_address_street'];
	$city =  $_POST['city'];
	$state =  $_POST['state'];
	$zipcode = $_POST['zipcode'];


	try {
		$sql = "INSERT INTO Athena (uid, are_you_owed_5k, do_you_have_judgment, cse_direct_pay, your_case_number, county_is_that_in, state_enforces_your_child_support_order, is_this_an_interstate_case, if_yes_which_state_originating_state, full_address_street, city, state, zipcode)
		VALUES ('$uid ', '$are_you_owed', '$do_you_have_judgment', '$cse_direct_pay', '$your_case_number', '$county_is_that_in', '$state_enforces_your_child_support_order', '$is_this_an_interstate_case', '$if_yes_which_state_originating_state', '$full_address_street', '$city', '$state', '$zipcode')";
		$conn->exec($sql);				
						
	}
	catch(PDOException $e) {
		echo "Error: " . $e->getMessage();
	}


}
else{
	$full_address_street1 = $_POST['full_address_street1'];
	$city1 = $_POST['city1'];
	$state1 = $_POST['state1'];
	$zipcode1 = $_POST['zipcode1'];

	$your_child_support_order_number = $_POST['your_child_support_order_number'];
	$county_is_that_in1 = $_POST['county_is_that_in1'];
	$state_enforces_your_child_support_order = $_POST['state_enforces_your_child_support_order'];
	$do_you_currently_reside_state = $_POST['do_you_currently_reside_state'];
	$If_no_in_which_state_do_you_currently_live = $_POST['If_no_in_which_state_do_you_currently_live'];
	$does_payor_still_reside_originating_state = $_POST['does_payor_still_reside_originating_state'];


	try {
		$sql = "INSERT INTO Athena (uid, are_you_owed_5k, do_you_have_judgment, cse_direct_pay, your_child_support_order_number, county_is_that_in, state_enforces_your_child_support_order, do_you_currently_reside_state, If_no_in_which_state_do_you_currently_live, does_payor_still_reside_originating_state, full_address_street, city, state, zipcode)
		VALUES ('$uid ', '$are_you_owed', '$do_you_have_judgment', '$cse_direct_pay', '$your_child_support_order_number', '$county_is_that_in1', '$state_enforces_your_child_support_order', '$do_you_currently_reside_state', '$If_no_in_which_state_do_you_currently_live', '$does_payor_still_reside_originating_state', '$full_address_street1', '$city1', '$state1', '$zipcode1')";
		$conn->exec($sql);						
						
	}
	catch(PDOException $e) {
		echo "Error: " . $e->getMessage();
	}

}


$payee_first_name = $_POST['payee_first_name'];
$payee_last_name = $_POST['payee_last_name'];
$payee_street_address = $_POST['payee_street_address'];
$payee_city = $_POST['payee_city'];

$payee_state = $_POST['payee_state'];
$payee_zip_code = $_POST['payee_zip_code'];
$payee_cell_phone = $_POST['payee_cell_phone'];
$payee_email = $_POST['payee_email'];
$payor_first_name = $_POST['payor_first_name'];
$payor_last_name = $_POST['payor_last_name'];
$payor_street_address = $_POST['payor_street_address'];
$payor_city = $_POST['payor_city'];

$payor_state = $_POST['payor_state'];
$payor_zip_code = $_POST['payor_zip_code'];
$payor_cell_phone = $_POST['payor_cell_phone'];
$payor_email = $_POST['payor_email'];


	try {
		$sql = "INSERT INTO Payee_info (uid, type, payee_first_name, payee_last_name, payee_street_address, payee_city, payee_state, payee_zip_code, payee_cell_phone, payee_email, payor_first_name, payor_last_name, payor_street_address, payor_city, payor_state, payor_zip_code, payor_cell_phone, payor_email)
		VALUES ('$uid ', '$cse_direct_pay', '$payee_first_name[0]', '$payee_last_name[0]', '$payee_street_address[0]', '$payee_city[0]', '$payee_state[0]', '$payee_zip_code[0]', '$payee_cell_phone[0]', '$payee_email[0]', '$payor_first_name[0]', '$payor_last_name[0]', '$payor_street_address[0]', '$payor_city[0]', '$payor_state[0]', '$payor_zip_code[0]', '$payor_cell_phone[0]', '$payor_email[0]')";
		$conn->exec($sql);						
						
	}
	catch(PDOException $e) {
		echo "Error: " . $e->getMessage();
	}

if(!empty($payee_first_name[1]) && !empty($payee_email[1])){
	try {
		$sql = "INSERT INTO Payee_info (uid, type, payee_first_name, payee_last_name, payee_street_address, payee_city, payee_state, payee_zip_code, payee_cell_phone, payee_email, payor_first_name, payor_last_name, payor_street_address, payor_city, payor_state, payor_zip_code, payor_cell_phone, payor_email)
		VALUES ('$uid ', '$cse_direct_pay', '$payee_first_name[1]', '$payee_last_name[1]', '$payee_street_address[1]', '$payee_city[1]', '$payee_state[1]', '$payee_zip_code[1]', '$payee_cell_phone[1]', '$payee_email[1]', '$payor_first_name[1]', '$payor_last_name[1]', '$payor_street_address[1]', '$payor_city[1]', '$payor_state[1]', '$payor_zip_code[1]', '$payor_cell_phone[1]', '$payor_email[1]')";
		$conn->exec($sql);						
						
	}
	catch(PDOException $e) {
		echo "Error: " . $e->getMessage();
	}
	
	

}
if(!empty($payee_first_name[2]) && !empty($payee_email[2])){
	try {
		$sql = "INSERT INTO Payee_info (uid, type, payee_first_name, payee_last_name, payee_street_address, payee_city, payee_state, payee_zip_code, payee_cell_phone, payee_email, payor_first_name, payor_last_name, payor_street_address, payor_city, payor_state, payor_zip_code, payor_cell_phone, payor_email)
		VALUES ('$uid ', '$cse_direct_pay', '$payee_first_name[2]', '$payee_last_name[2]', '$payee_street_address[2]', '$payee_city[2]', '$payee_state[2]', '$payee_zip_code[2]', '$payee_cell_phone[2]', '$payee_email[2]', '$payor_first_name[2]', '$payor_last_name[2]', '$payor_street_address[2]', '$payor_city[2]', '$payor_state[2]', '$payor_zip_code[2]', '$payor_cell_phone[2]', '$payor_email[2]')";
		$conn->exec($sql);						
						
	}
	catch(PDOException $e) {
		echo "Error: " . $e->getMessage();
	}
	
	

}
header('location: /thankyou.php');

?>
