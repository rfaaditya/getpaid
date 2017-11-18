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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
  <!--form_sec-->
  
  <section class="form_section">
    <div class="container">
      <div class="row">
		  <div class="form_steps">
			<ul>
			  <li class="form_steps-1 active"><a href="#">Step</a></li>
			  <li class="form_steps-2"><a href="#" >Step</a></li>
			  <li class="form_steps-3"><a href="#">Step</a></li>
			  <li class="form_steps-4"><a href="#">Step</a></li>
			  <li class="form_steps-5"><a href="#">Step</a></li>
			  
			</ul>
		  </div>
        <div class="col-md-12">
			
          <div class="my_action_page">
			<form action="step.php" method="post">
             <!--form_option_steps-->
              
            <div class="form_option_steps step-1 active-query">
             
              <div class="form-group">
                <label>Are you owed $5k, 6 months or more overdue?<sup>*</sup></label>
                <select id="more-overdue" class="form-control" name="are_you_owed" >
                  <option value="yes">Yes </option>
                  <option value="no">No </option>
                </select>
              </div>
              <div class="submit_btn">
                <span class="nxt-btn">Continue</span>
              </div>
            </div>
            <!--form_option_steps-->
            
            <div class="form_option_steps step-2-1">
              <p> </p>
              <br>
             
                <div class="form-group">
                  <label>Do you have a judgment for your past due child support?<sup>*</sup></label>
                  <select class="form-control" name="do_you_have_judgment">
                    <option value="yes">Yes </option>
                    <option value="no">No </option>
                    <option value="unsure">Unsure </option>
                  </select>
                </div>
               
                <div class="form-group">
                  <label>Is your child support case currently with a child support enforcement agency (CSE) or do you
                  recieve direct payments?<sup>*</sup></label>
                  <select id="cse_direct_pay" class="form-control" name="cse_direct_pay">
                    <option value="cse">CSE </option>
                    <option value="direct_pay">Direct pay </option>
                  </select>
                </div>
                <div class="submit_btn">
				  <span class="back-btn">Back</span>
                  <span class="nxt-btn">Continue</span>
                </div>
              
            </div>
            <!--form_option_steps-->
            
            <div class="form_option_steps step-2-2">
                <p> We‘re sorry, but based on the information entered you currently do not qualify for  <strong>ATHENA <span>PREMIUM</span>.</strong></p>
                <p>You can continue on and select <strong>ATHENA BASIC</strong> at the end of this questionnaire, or end now and 
                  come back when you are owed at least $5k for 6 months or more.</p>
             
              
               <div class="submit_btn">
				    <a href="/"><span class="back-btn">End Now</span></a>
					<span class="nxt-btn">Continue</span>
              </div>
              
              
            </div>
            <!--form_option_steps-->
            
            <div class="form_option_steps step-3-1">
             
             
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter your case number</label>
                  <input class="form-control" id="your_case_number" placeholder="case number" maxlength="25" type="text" name="your_case_number">
                  <div class="error"></div>
                </div>
               
                <div class="form-group">
                 <label>Which state enforces your child support order?<sup>*</sup></label>
                  <select class="form-control state_call" id="state_enforces_your_child_support_order" name="state_enforces_your_child_support_order">
					<option value='select'>--Select--</option>
					   <?php $stmt = $conn->prepare("SELECT DISTINCT state, state_code FROM us_cities"); 
									$stmt->execute();

									// set the resulting array to associative
									$result = $stmt->fetchAll();
									foreach($result as $k=>$v) { 
										echo "<option value='".$v['state_code']."'>".$v['state']."</option>"; 
									}
									
						?>
                  </select>
                </div>
                 <div class="form-group">
				  <label>Which county is that in<sup>*</sup></label>
                  <select id="county" class="form-control county" name="county_is_that_in">
					  <option value='select'>--county--</option>
					  
                  </select>
                  <div class="error"></div>
                </div>
                <div class="form-group">
                  <label>Is this an interstate case?<sup>*</sup></label>
                  <select class="form-control" name="is_this_an_interstate_case" id="is_this_an_interstate_case">
					  <option value="">--Select-- </option>
						<option value="yes">Yes </option>
						<option value="no">No </option>
                  </select>
                </div>
                <div class="form-group if-yes" >
                  <label>If yes, which state is the originating State?<sup>*</sup></label>
                  <select class="form-control state2"  name="if_yes_which_state_originating_state">
                    <?php $stmt = $conn->prepare("SELECT DISTINCT state, state_code FROM us_cities"); 
									$stmt->execute();

									// set the resulting array to associative
									$result = $stmt->fetchAll();
									foreach($result as $k=>$v) { 
										echo "<option value='".$v['state_code']."'>".$v['state']."</option>"; 
									}
									
						?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Full address of the child support office in the enforcing state</label>
                  <input class="form-control" id="full_address_street" placeholder="Street address" type="text" name="full_address_street">
                  <div class="error"></div>
                </div>
                <div class="three_items">
					<div class="form-group">
						<label for="exampleInputEmail1">State</label>
						<select class="form-control state2" id="state"  name="state">
							<option>-- State --</option>
						<?php $stmt = $conn->prepare("SELECT DISTINCT state, state_code FROM us_cities"); 
										$stmt->execute();

										// set the resulting array to associative
										$result = $stmt->fetchAll();
										foreach($result as $k=>$v) { 
											echo "<option value='".$v['state_code']."'>".$v['state']."</option>"; 
										}
										
							?>
					  </select>
						<div class="error"></div>
					</div>
					<div class="form-group">
                    <label for="exampleInputEmail1">City</label>
                     <select class="form-control state2" id="city" name="city">
						<option>-- City --</option>
                    </select>
                    <div class="error"></div>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Zip code</label>
                    <input class="form-control" id="zipcode" placeholder="Zip code" maxlength="5" type="text" name="zipcode">
                    <span class="loading" style="display:none;">Loding...</span>
					<span id="zip_status" class="ziperror"></span>
                    <div class="error"></div>
                  </div>
                </div>
                <div class="submit_btn">
					<span class="back-btn">Back</span>
                  <span class="nxt-btn">Continue</span>
                </div>
             
             
            </div>
            <!--form_option_steps-->
            
            <div class="form_option_steps step-3-2">
              
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter your child support order number</label>
                  <input name="your_child_support_order_number" class="form-control" id="your_child_support_order_number" maxlength="25" placeholder="order number" type="text">
					<div class="error"></div>
                </div>
                <div class="form-group">
                  <label>In which state did  you recieve your child support order?<sup>*</sup></label>
                  <select class="form-control state1" name="state_enforces_your_child_support_order" id="state_enforces_your_child_support_order">
                     <option value='select'>--Select--</option>
					   <?php $stmt = $conn->prepare("SELECT DISTINCT state, state_code FROM us_cities"); 
									$stmt->execute();

									// set the resulting array to associative
									$result = $stmt->fetchAll();
									foreach($result as $k=>$v) { 
										echo "<option value='".$v['state_code']."'>".$v['state']."</option>"; 
									}
									
						?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Which county is that in<sup>*</sup></label>
                  <select id="county1" class="form-control" name="county_is_that_in1">
					  <option value='select'>--county--</option>
                  </select>
                  <div class="error"></div>
                </div>
                
                 <div class="form-group">
                  <label>Do you currently reside in this state?<sup>*</sup></label>
                  <select class="form-control" name="do_you_currently_reside_state" id="do_you_currently_reside_state">
					  <option value="">--Select-- </option>
                    <option value="yes">Yes </option>
                    <option value="no">No </option>
                  </select>
                </div>
                <div class="form-group if-no">
                  <label>If no, in which state do you currently live?<sup>*</sup></label>
                  <select class="form-control state3" name="If_no_in_which_state_do_you_currently_live" id="If_no_in_which_state_do_you_currently_live">
						 <?php $stmt = $conn->prepare("SELECT DISTINCT state, state_code FROM us_cities"); 
									$stmt->execute();

									// set the resulting array to associative
									$result = $stmt->fetchAll();
									foreach($result as $k=>$v) { 
										echo "<option value='".$v['state_code']."'>".$v['state']."</option>"; 
									}
									
						?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Does the payor still reside in the originating state?<sup>*</sup></label>
                  <select class="form-control" name="does_payor_still_reside_originating_state" id="does_payor_still_reside_originating_state">
                    <option>Yes </option>
                    <option>No </option>
                    <option>Unsure </option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Full address for Family Court which appears on your child support order</label>
                  <input class="form-control" id="full_address_street1" placeholder="Street address" type="text" name="full_address_street1">
                  <div class="error"></div>
                </div>
                <div class="three_items">
					<div class="form-group">
						<label for="exampleInputEmail1">State</label>
						
						<select class="form-control state2" id="state_direct"  name="state1">
							<option>-- State --</option>
						<?php $stmt = $conn->prepare("SELECT DISTINCT state, state_code FROM us_cities"); 
										$stmt->execute();

										// set the resulting array to associative
										$result = $stmt->fetchAll();
										foreach($result as $k=>$v) { 
											echo "<option value='".$v['state_code']."'>".$v['state']."</option>"; 
										}
										
							?>
					  </select>
						<div class="error"></div>
					</div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">City</label>
                    
                    <select class="form-control state2" id="city_direct" name="city1">
						<option>-- City --</option>
                    </select>
                    <div class="error"></div>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Zip code</label>
                    <input class="form-control" id="zipcode1" placeholder="Zip code" maxlength="5" type="text" name="zipcode1">
                    <span class="loading" style="display:none;">Loding...</span>
					<span id="zip_status1" class="ziperror"></span>
                    <div class="error"></div>
                  </div>
                </div>
                <div class="submit_btn">
					<span class="back-btn">Back</span>
                  <span class="nxt-btn">Continue</span>
                </div>
                
            </div>
            <!--form_option_steps--> 
            <div class="form_option_steps step-4">
             <p>   Enter Payee’s Information. The payee is the one who receives the child support.</p>
			<div class="first-payee">
			   <div class="form-group">
				<label for="exampleInputEmail1">Enter Your first name </label>
				<input name="payee_first_name[]" class="form-control payee_first_name" id="" maxlength="100" placeholder="First Name" type="text">
				<div class="error"></div>
			  </div> 
			  <div class="form-group">
				<label for="exampleInputEmail1">Enter Your Last name </label>
				<input name="payee_last_name[]" class="form-control payee_last_name" id="" maxlength="100" placeholder="Last Name" type="text">
				<div class="error"></div>
			  </div> 
			  
			  
			  <div class="form-group">
				<label for="exampleInputEmail1">Enter Your Street Address </label>
				<input name="payee_street_address[]" class="form-control payee_street_address" id="" maxlength="100" placeholder="Street Address" type="text">
				<div class="error"></div>
			  </div> 
			  <div class="form-group">
				  <label>State<sup>*</sup></label>
				  <select name="payee_state[]" class="form-control payee_state fill_state" id="payee_state" rel="fill_city">
					  <option> -- State --</option>
					<?php $stmt = $conn->prepare("SELECT DISTINCT state, state_code FROM us_cities"); 
										$stmt->execute();

										// set the resulting array to associative
										$result = $stmt->fetchAll();
										foreach($result as $k=>$v) { 
											echo "<option value='".$v['state_code']."'>".$v['state']."</option>"; 
										}
										
							?>
				  </select>
				  <div class="error"></div>
			  </div>
			  <label for="exampleInputEmail1">City</label>
			   <div class="form-group">
					<select name="payee_city[]" class="form-control payee_city fill_city">
						<option> -- City --</option>
				  </select>
					
			  </div>
			  
			  
			  <div class="form-group">
				<label for="exampleInputEmail1">Zip code</label>
					<input name="payee_zip_code[]" class="form-control payee_zip_code" id="fill_zip" maxlength="5" placeholder="Zip Code" type="text">
					<span class="loading" style="display:none;">Loding...</span>
					<span id="fillzip_status" class="ziperror"></span>
					
					<div class="error"></div>
			  </div> 
			  <div class="form-group">
				<label for="exampleInputEmail1">Cell Phone</label>
				<input name="payee_cell_phone[]" class="form-control payee_cell_phone" id="phone" placeholder="Cell Phone" type="tel">
				<span id="valid-msg" class="hide">✓ Valid</span>
				<span id="error-msg" class="hide">Invalid number</span>
				<div class="error"></div>
			  </div> 
			  <div class="form-group">
				<label for="exampleInputEmail1">Email Address</label>
				<input name="payee_email[]" class="form-control payee_email" id="email" placeholder="Email Address" type="email">
				<span class="loading" style="display:none;">Loding...</span>
				<span id="status" ></span>
				<div class="error"></div>
			  </div> 
			  
			<p> Enter Payor’s information. The payor is the one who pays the child support.</p>
			
			  <div class="form-group">
				<label for="exampleInputEmail1">Enter Payor’s First Name</label>
				<input name="payor_first_name[]" class="form-control"  maxlength="100" placeholder="Payor's First Name" type="text">
				<div class="error"></div>
			  </div> 
			  <div class="form-group">
				<label for="exampleInputEmail1">Enter Payor’s Last Name</label>
				<input name="payor_last_name[]" class="form-control"  maxlength="25" placeholder="Payor's Last Name" type="text">
				<div class="error"></div>
			  </div> 
			  <div class="form-group">
				<label for="exampleInputEmail1">Enter Payor’s Street Address </label>
				<input name="payor_street_address[]" class="form-control payor_street_address" id="" maxlength="100" placeholder="Street Address" type="text">
				<div class="error"></div>
			  </div> 
			  <div class="form-group">
				  <label>Payor’s State<sup>*</sup></label>
				  <select name="payor_state[]" class="form-control payor_state fill_state" id="payee_state1" rel="fill_city1">
					 <option> -- State --</option>
					<?php $stmt = $conn->prepare("SELECT DISTINCT state, state_code FROM us_cities"); 
										$stmt->execute();

										// set the resulting array to associative
										$result = $stmt->fetchAll();
										foreach($result as $k=>$v) { 
											echo "<option value='".$v['state_code']."'>".$v['state']."</option>"; 
										}
										
							?>
				  </select>
				  <div class="error"></div>
			  </div>
			   <div class="form-group">
					<label for="exampleInputEmail1">Payor’s City</label>
					
					<select name="payor_city[]" class="form-control payee_city fill_city1">
							<option> -- City --</option>
					  </select>
					<div class="error"></div>
			  </div>
			  
			  
			  <div class="form-group">
				<label for="exampleInputEmail1">Payor’s Zip code</label>
				<input name="payor_zip_code[]" class="form-control payor_zip_code" id="payor_zip1" maxlength="5" placeholder="Zip Code" type="text">
				<span class="loading" style="display:none;">Loding...</span>
					<span id="fillzip_status1" class="ziperror"></span>
				<div class="error"></div>
			  </div> 
			  <div class="form-group">
				<label for="exampleInputEmail1">Payor’s Cell Phone</label>
				<input name="payor_cell_phone[]" class="form-control payor_cell_phone" id="phone1" placeholder="Cell Phone"  type="tel">
				<span id="valid-msg1" class="hide">✓ Valid</span>
				<span id="error-msg1" class="hide">Invalid number</span>
				<div class="error"></div>
			  </div> 
			  <div class="form-group">
				<label for="exampleInputEmail1">Payor’s email address</label>
				<input name="payor_email[]" class="form-control payor_email" id="" placeholder="Email Address" type="email">
				<div class="error"></div>
			  </div> 
			  
			  <button id="add-more">Add Another Payee</button>
			  </div>
			  <!--another payee-->
			  
			  
			  <div class="second-payee">
				    <hr>
			   <p>   Enter Payee’s Information. The payee is the one who receives the child support.</p>
			
			   <div class="form-group">
				<label for="exampleInputEmail1">Enter Your first name </label>
				<input name="payee_first_name[]" class="form-control payee_first_name" id="" maxlength="100" placeholder="First Name" type="text">
				<div class="error"></div>
			  </div> 
			  <div class="form-group">
				<label for="exampleInputEmail1">Enter Your Last name </label> 
				<input name="payee_last_name[]" class="form-control payee_last_name" id="" maxlength="100" placeholder="Last Name" type="text">
				<div class="error"></div>
			  </div> 
			  
			  
			  <div class="form-group">
				<label for="exampleInputEmail1">Enter Your Street Address </label>
				<input name="payee_street_address[]" class="form-control payee_street_address" id="" maxlength="100" placeholder="Street Address" type="text">
				<div class="error"></div>
			  </div> 
			   <div class="form-group">
				  <label>State<sup>*</sup></label>
				  <select name="payee_state[]" class="form-control payee_state fill_state" id="payee_state2" rel="fill_city2">
					  <option> -- State --</option>
					<?php $stmt = $conn->prepare("SELECT DISTINCT state, state_code FROM us_cities"); 
										$stmt->execute();

										// set the resulting array to associative
										$result = $stmt->fetchAll();
										foreach($result as $k=>$v) { 
											echo "<option value='".$v['state_code']."'>".$v['state']."</option>"; 
										}
										
							?>
				  </select>
				  <div class="error"></div>
			  </div>
			  <label for="exampleInputEmail1">City</label>
			   <div class="form-group">
					<select name="payee_city[]" class="form-control payee_city fill_city2">
						<option> -- City --</option>
				  </select>
					
			  </div>
			  
			 
			
			  <div class="form-group">
				<label for="exampleInputEmail1">Zip code</label>
				<input name="payee_zip_code[]" class="form-control payee_zip_code" id="payee_zip1" maxlength="5" placeholder="Zip Code" type="text">
				<span class="loading" style="display:none;">Loding...</span>
					<span id="fillzip_status2" class="ziperror"></span>
				<div class="error"></div>
			  </div> 
			  <div class="form-group">
				<label for="exampleInputEmail1">Cell Phone</label>
				<input name="payee_cell_phone[]" class="form-control payee_cell_phone" id="phone2" placeholder="Cell Phone" type="tel">
				<span id="valid-msg2" class="hide">✓ Valid</span>
				<span id="error-msg2" class="hide">Invalid number</span>
				<div class="error"></div>
			  </div> 
			  <div class="form-group">
				<label for="exampleInputEmail1">email address</label>
				<input name="payee_email[]" class="form-control payee_email" id="" placeholder="Email Address" type="email">
				<div class="error"></div>
			  </div> 
			  
			<p> Enter Payor’s information. The payor is the one who pays the child support.</p>
			
			  <div class="form-group">
				<label for="exampleInputEmail1">Enter Payor’s First Name</label>
				<input name="payor_first_name[]" class="form-control" id="" name="payee_fname" maxlength="100" placeholder="Payor's First Name" type="text">
				<div class="error"></div>
			  </div> 
			  <div class="form-group">
				<label for="exampleInputEmail1">Enter Payor’s Last Name</label>
				<input name="payor_last_name[]" class="form-control" id="" name="payee_lname" maxlength="100" placeholder="Payor's Last Name" type="text">
				<div class="error"></div>
			  </div> 
			  <div class="form-group">
				<label for="exampleInputEmail1">Enter Payor’s Street Address </label>
				<input name="payor_street_address[]" class="form-control payor_street_address" id="" maxlength="100" placeholder="Street Address" type="text">
				<div class="error"></div>
			  </div> 
			   <div class="form-group">
				  <label>Payor’s State<sup>*</sup></label>
				  <select name="payor_state[]" class="form-control payor_state fill_state" id="payor_state2" rel="fill_city4">
					 <option> -- State --</option>
					<?php $stmt = $conn->prepare("SELECT DISTINCT state, state_code FROM us_cities"); 
										$stmt->execute();

										// set the resulting array to associative
										$result = $stmt->fetchAll();
										foreach($result as $k=>$v) { 
											echo "<option value='".$v['state_code']."'>".$v['state']."</option>"; 
										}
										
							?>
				  </select>
				  <div class="error"></div>
			  </div>
			   <div class="form-group">
					<label for="exampleInputEmail1">Payor’s City</label>
					
					<select name="payor_city[]" class="form-control payee_city fill_city4">
							<option> -- City --</option>
					  </select>
					<div class="error"></div>
			  </div>
			  
			  <div class="form-group">
				<label for="exampleInputEmail1">Payor’s Zip code</label>
				<input name="payor_zip_code[]" class="form-control payor_zip_code" id="payor_zip2" maxlength="5" placeholder="Zip Code" type="text">
				<span class="loading" style="display:none;">Loding...</span>
					<span id="fillzip_status3" class="ziperror"></span>
				<div class="error"></div>
			  </div> 
			  <div class="form-group">
				<label for="exampleInputEmail1">Payor’s Cell Phone</label>
				<input name="payor_cell_phone[]" class="form-control payor_cell_phone" id="phone3" placeholder="Cell Phone" type="tel">
				<span id="valid-msg3" class="hide">✓ Valid</span>
				<span id="error-msg3" class="hide">Invalid number</span>
				<div class="error"></div>
			  </div> 
			  <div class="form-group">
				<label for="exampleInputEmail1">Payor’s email address</label>
				<input name="payor_email[]" class="form-control payor_email" id="" placeholder="Email Address" type="email">
				<div class="error"></div>
			  </div> 
			  
			  <button id="remove_2">Remove</button><button id="add-more_2">Add Another Payee</button>
			  
			  </div>
			  
			  <!--another payee-->
			  
			  <div class="third-payee">
				  <hr>
			   <p>   Enter Payee’s Information. The payee is the one who receives the child support.</p>
			
			  <div class="form-group">
				<label for="exampleInputEmail1">Enter Your first name </label>
				<input name="payee_first_name[]" class="form-control payee_first_name" id="" maxlength="100" placeholder="First Name" type="text">
				<div class="error"></div>
			  </div> 
			  <div class="form-group">
				<label for="exampleInputEmail1">Enter Your Last name </label>
				<input name="payee_last_name[]" class="form-control payee_last_name" id="" maxlength="100" placeholder="Last Name" type="text">
				<div class="error"></div>
			  </div> 
			  
			  
			  <div class="form-group">
				<label for="exampleInputEmail1">Enter Your Street Address </label>
				<input name="payee_street_address[]" class="form-control payee_street_address" id="" maxlength="100" placeholder="Street Address" type="text">
				<div class="error"></div>
			  </div> 
			   <div class="form-group">
				  <label>State<sup>*</sup></label>
				  <select name="payee_state[]" class="form-control payee_state fill_state" id="payee_state3" rel="fill_city3">
					  <option> -- State --</option>
					<?php $stmt = $conn->prepare("SELECT DISTINCT state, state_code FROM us_cities"); 
										$stmt->execute();

										// set the resulting array to associative
										$result = $stmt->fetchAll();
										foreach($result as $k=>$v) { 
											echo "<option value='".$v['state_code']."'>".$v['state']."</option>"; 
										}
										
							?>
				  </select>
				  <div class="error"></div>
			  </div>
			  <label for="exampleInputEmail1">City</label>
			   <div class="form-group">
					<select name="payee_city[]" class="form-control payee_city fill_city3">
						<option> -- City --</option>
				  </select>
					
			  </div>
			  
			 
			
			  <div class="form-group">
				<label for="exampleInputEmail1">Zip code</label>
				<input name="payee_zip_code[]" class="form-control payee_zip_code" id="payee_zip2" maxlength="5" placeholder="Zip Code" type="text">
				<span class="loading" style="display:none;">Loding...</span>
					<span id="fillzip_status4" class="ziperror"></span>
				<div class="error"></div>
			  </div> 
			  <div class="form-group">
				<label for="exampleInputEmail1">Cell Phone</label>
				<input name="payee_cell_phone[]" class="form-control payee_cell_phone" id="phone4"  placeholder="Cell Phone" type="tel">
				<span id="valid-msg4" class="hide">✓ Valid</span>
				<span id="error-msg4" class="hide">Invalid number</span>
				<div class="error"></div>
			  </div> 
			  <div class="form-group">
				<label for="exampleInputEmail1">email address</label>
				<input name="payee_email[]" class="form-control payee_email" id="" placeholder="Email Address" type="email">
				<div class="error"></div>
			  </div> 
			  
			<p> Enter Payor’s information. The payor is the one who pays the child support.</p>
			
			  <div class="form-group">
				<label for="exampleInputEmail1">Enter Payor’s First Name</label>
				<input name="payor_first_name[]" class="form-control" id="" name="payee_fname" maxlength="100" placeholder="Payor's First Name" type="text">
				<div class="error"></div>
			  </div> 
			  <div class="form-group">
				<label for="exampleInputEmail1">Enter Payor’s Last Name</label>
				<input name="payor_last_name[]" class="form-control" id="" name="payee_lname" maxlength="100" placeholder="Payor's Last Name" type="text">
				<div class="error"></div>
			  </div> 
			  <div class="form-group">
				<label for="exampleInputEmail1">Enter Payor’s Street Address </label>
				<input name="payor_street_address[]" class="form-control payor_street_address" id="" maxlength="100" placeholder="Street Address" type="text">
				<div class="error"></div>
			  </div> 
			   <div class="form-group">
				  <label>Payor’s State<sup>*</sup></label>
				  <select name="payor_state[]" class="form-control payor_state fill_state" id="payor_state3" rel="fill_city6">
					 <option> -- State --</option>
					<?php $stmt = $conn->prepare("SELECT DISTINCT state, state_code FROM us_cities"); 
										$stmt->execute();

										// set the resulting array to associative
										$result = $stmt->fetchAll();
										foreach($result as $k=>$v) { 
											echo "<option value='".$v['state_code']."'>".$v['state']."</option>"; 
										}
										
							?>
				  </select>
				  <div class="error"></div>
			  </div>
			   <div class="form-group">
					<label for="exampleInputEmail1">Payor’s City</label>
					
					<select name="payor_city[]" class="form-control payee_city fill_city6">
							<option> -- City --</option>
					  </select>
					<div class="error"></div>
			  </div>
			  
			  <div class="form-group">
				<label for="exampleInputEmail1">Payor’s Zip code</label>
				<input name="payor_zip_code[]" class="form-control payor_zip_code" id="payor_zip5" maxlength="5" placeholder="Zip Code" type="text">
				<span class="loading" style="display:none;">Loding...</span>
					<span id="fillzip_status6" class="ziperror"></span>
				<div class="error"></div>
			  </div> 
			  <div class="form-group">
				<label for="exampleInputEmail1">Payor’s Cell Phone</label>
				<input name="payor_cell_phone[]" class="form-control payor_cell_phone" id="phone5" placeholder="Cell Phone" type="tel">
				<span id="valid-msg5" class="hide">✓ Valid</span>
				<span id="error-msg5" class="hide">Invalid number</span>
				<div class="error"></div>
			  </div> 
			  <div class="form-group">
				<label for="exampleInputEmail1">Payor’s email address</label>
				<input name="payor_email[]" class="form-control payor_email" id="" placeholder="Email Address" type="email">
				<div class="error"></div>
			  </div> 
			  
			  <button id="remove_3">Remove</button>
			  </div>
			  
			  
			   
				<div class="submit_btn">
					<span class="back-btn">Back</span>
					<span class="nxt-btn">Continue</span>
				</div>
				
            </div>
            <!--form_option_steps-->
            
            <div class="form_option_steps step-5">
            
            <div class="plan_feature">
              <div class="col-md-4 col-sm-4">
                <div class="plan_sec">
                  <h2>Basic Access Athena</h2>
                  <p>Basic Access Athena is for Moms who do not mind a complete do-it-yourself method. We provide all the state-specific documents that you need as well as the step-by-step knowledge base in our Athena library.</p>
                  <ul>
                    <li><img src="images/right_sign.png">Unlimited Documents</li>
                    <li><img src="images/right_sign.png">Unlimited Letters</li>
                    <li><img src="images/right_sign.png">How-to Instructions</li>
                    <li><img src="images/right_sign.png">Email Support</li>
                  </ul>
                  <div class="pay_order"> <input type="submit" value="$9.99"> </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="plan_sec">
                  <h2>Premium Access Athena</h2>
                  <p>Moms who want their collections to be fast, easy and who prefer a more hands-off approach can relax and let Athena do all of the work. Athena will prepare your legal documents, investigate and locate the payor's 
                    current address, employment, income sources, real and personal assets 
                    and assist as your file your paperwork throughout the collections process.</p>
                  <ul>
                    <li><img src="images/right_sign.png">Unlimited Document Preparation</li>
                    <li><img src="images/right_sign.png">Unlimited Letter Preparation</li>
                    <li><img src="images/right_sign.png">Skip Tracing</li>
                    <li><img src="images/right_sign.png">Cloud Storage</li>
                    <li><img src="images/right_sign.png">Email Support</li>
                    <li><img src="images/right_sign.png">Phone Support</li>
                    <li><img src="images/right_sign.png">Online Chat Support</li>
                  </ul>
                  <div class="pay_order"><input type="submit" value="$99.99">  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4">
                <h2>What happens after you order</h2>
                <video width="325" height="200" controls>
				  <source src="images/Cathyf.mp4" type="video/mp4">
				  
				  Your browser does not support HTML5 video.
				</video>
                </div>
                
            </div>
            
                <div class="submit_btn">
					<span class="back-btn">Back</span>
                </div>
          
            </div>
            <!--form_option_steps-->
            </form>
            
          </div>
          
          
        </div>
      </div>
    </div>
  </section>
  <!--form_section--> 
  
</div>
</main>
<!--background_container-->

</div>
<!--main_wrapper-->
<script src="prism.js"></script>
<script src="intlTelInput.js"></script>
    <script src="isValidNumber.js"></script>
</body>
</html>
<?php }
else { header('location: '.$base_url); }

?>
