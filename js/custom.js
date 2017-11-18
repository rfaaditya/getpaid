
jQuery( document ).ready(function() {

	jQuery(".step-1 .submit_btn .nxt-btn").click( function(event){
			jQuery('.step-1').addClass("move-off");
			jQuery('.step-1').removeClass("active-query");
			
			jQuery(".form_steps-1").removeClass("active");
			jQuery(".form_steps-1").next().addClass("active");
			
			var val = jQuery("#more-overdue").val();
			
			if(val == "yes"){
					jQuery(".step-2-1").addClass("active-query");
					var height = jQuery(".step-2-1").height();
					var newheight = height + 80;
					jQuery(".my_action_page").css('height', newheight);
			}
			else{
					jQuery(".step-2-2").addClass("active-query");
					var height = jQuery(".step-2-2").height();
					var newheight = height + 80;
					jQuery(".my_action_page").css('height', newheight);
			}
			
			
			
		});
		
		jQuery(".step-2-1 .submit_btn .nxt-btn").click( function(event){
			jQuery('.step-2-1').addClass("move-off");
			jQuery('.step-2-1').removeClass("active-query");
			jQuery(".form_steps-2").removeClass("active");
			jQuery(".form_steps-2").next().addClass("active");
			
			var val = jQuery("#cse_direct_pay").val();
			
			if(val == "cse"){
					jQuery(".step-3-1").addClass("active-query");
					var height = jQuery(".step-3-1").height();
					var newheight = height + 80;
					jQuery(".my_action_page").css('height', newheight);
			}
			else{
					jQuery(".step-3-2").addClass("active-query");
					var height = jQuery(".step-3-2").height();
					var newheight = height + 80;
					jQuery(".my_action_page").css('height', newheight);
			}
			
			
		});
		jQuery(".step-2-2 .submit_btn .nxt-btn").click( function(event){
			jQuery('.step-2-2').addClass("move-off");
			jQuery('.step-2-2').removeClass("active-query");
			jQuery(".step-2-1").addClass("active-query");
			var height = jQuery(".step-2-1").height();
			var newheight = height + 80;
			jQuery(".my_action_page").css('height', newheight);
		});
		
		jQuery(".step-3-1 .submit_btn .nxt-btn").click( function(event){
			
			var name = jQuery('#your_case_number').val();
			if(name == ''){
				jQuery('#your_case_number').next('.error').html("<p style='color:red;'>This field is required</p>");
				return false;
			}
			var name1 = jQuery('#country').val();
			if(name1 == 'select'){
				jQuery('#country').next('.error').html("<p style='color:red;'>This field is required</p>");
				return false;
			}
			var address = jQuery('#full_address_street').val();
			if(address == ''){
				jQuery('#full_address_street ').next('.error').html("<p style='color:red;'>This field is required</p>");
				return false;
			}
			var city = jQuery('#city').val();
			if(city == ''){
				jQuery('#city').next('.error').html("<p style='color:red;'>This field is required</p>");
				return false;
			}
			var state = jQuery('#state').val();
			if(state == ''){
				jQuery('#state').next('.error').html("<p style='color:red;'>This field is required</p>");
				return false;
			}
			var zip = jQuery('#zipcode').val();
			if(zip == ''){
				jQuery('#zipcode').next('.error').html("<p style='color:red;'>This field is required</p>");
				return false;
			}
			else{
					if(/\D/.test(zip)){
						jQuery('#zipcode').next('.error').html("<p style='color:red;'>Only Digit are allowed</p>");
						return false;
					}
					else{
						if(zip.length != 5){
							jQuery('#zipcode').next('.error').html("<p style='color:red;'>Zip code is not valid</p>");
							return false;	
						}
					}
				}
			var text = $("#zip_status p").text();
				
				if(text == "Zip code not valid"){ return false; }
			
			
			
			jQuery('.step-3-1').addClass("move-off");
			jQuery('.step-3-1').removeClass("active-query");
			jQuery(".step-4").addClass("active-query");
			jQuery(".form_steps-3").removeClass("active");
			jQuery(".form_steps-3").next().addClass("active");
			var height = jQuery(".step-4").height();
			var newheight = height + 80;
			jQuery(".my_action_page").css('height', newheight);
		});
		jQuery(".step-3-2 .submit_btn .nxt-btn").click( function(event){
			
			var name = jQuery('#your_child_support_order_number').val();
			if(name == ''){
				jQuery('#your_child_support_order_number').next('.error').html("<p style='color:red;'>This field is required</p>");
				return false;
			}
			var name1 = jQuery('#country1').val();
			if(name1 == 'select'){
				jQuery('#country1').next('.error').html("<p style='color:red;'>This field is required</p>");
				return false;
			}
			var address = jQuery('#full_address_street1').val();
			if(address == ''){
				jQuery('#full_address_street1 ').next('.error').html("<p style='color:red;'>This field is required</p>");
				return false;
			}
			var city = jQuery('#city1').val();
			if(city == ''){
				jQuery('#city1').next('.error').html("<p style='color:red;'>This field is required</p>");
				return false;
			}
			var state = jQuery('#state1').val();
			if(state == ''){
				jQuery('#state1').next('.error').html("<p style='color:red;'>This field is required</p>");
				return false;
			}
			var zip = jQuery('#zipcode1').val();
			if(zip == ''){
				jQuery('#zipcode1').next('.error').html("<p style='color:red;'>This field is required</p>");
				return false;
			}
			else{
					if(/\D/.test(zip)){
						jQuery('#zipcode1').next('.error').html("<p style='color:red;'>Only Digit are allowed</p>");
						return false;
					}
					else{
						if(zip.length != 5){
							jQuery('#zipcode1').next('.error').html("<p style='color:red;'>Zip code is not valid</p>");
							return false;	
						}
					}
				}
			var text = $("#zip_status1 p").text();
				
			if(text == "Zip code not valid"){ return false; }
				
			
			jQuery('.step-3-2').addClass("move-off");
			jQuery('.step-3-2').removeClass("active-query");
			jQuery(".step-4").addClass("active-query");
			jQuery(".form_steps-3").removeClass("active");
			jQuery(".form_steps-3").next().addClass("active");
			
			
			
			var height = jQuery(".step-4").height();
			var newheight = height + 80;
			jQuery(".my_action_page").css('height', newheight);
		});
		
		
		jQuery(".step-4 .submit_btn .nxt-btn").click( function(event){
			// for first payee
			var payee_first_name = jQuery('.first-payee .payee_first_name').val();
			if(payee_first_name == ''){
				jQuery('.first-payee .payee_first_name').next('.error').html("<p style='color:red;'>This field is required</p>");
				return false;
			}
			var payee_last_name = jQuery('.first-payee .payee_last_name').val();
			if(payee_last_name == ''){
				jQuery('.first-payee .payee_last_name').next('.error').html("<p style='color:red;'>This field is required</p>");
				return false;
			}
			var payee_street_address = jQuery('.first-payee .payee_street_address').val();
			if(payee_street_address == ''){
				jQuery('.first-payee .payee_street_address').next('.error').html("<p style='color:red;'>This field is required</p>");
				return false;
			}
			var payee_city = jQuery('.first-payee .payee_city').val();
			if(payee_city == ''){
				jQuery('.first-payee .payee_city').next('.error').html("<p style='color:red;'>This field is required</p>");
				return false;
			}
			var payee_zip_code = jQuery('.first-payee .payee_zip_code').val();
			if(payee_zip_code == ''){
				jQuery('.first-payee .payee_zip_code').next('.error').html("<p style='color:red;'>This field is required</p>");
				return false;
			}
			else{
					if(/\D/.test(payee_zip_code)){
						jQuery('.first-payee .payee_zip_code').next('.error').html("<p style='color:red;'>Only Digit are allowed</p>");
						return false;
					}
					else{
						if(payee_zip_code.length != 5){
							jQuery('.first-payee .payee_zip_code').next('.error').html("<p style='color:red;'>Zip code is not valid</p>");
							return false;	
						}
					}
				}
			var payee_cell_phone = jQuery('.first-payee .payee_cell_phone').val();
			if(payee_cell_phone == ''){
				jQuery('.first-payee .payee_cell_phone').next('.error').html("<p style='color:red;'>This field is required</p>");
				return false;
			}
			var payee_email = jQuery('.first-payee .payee_email').val();
			if(payee_email == ''){
				jQuery('.first-payee .payee_email').next('.error').html("<p style='color:red;'>This field is required</p>");
				return false;
			}
			else{
				if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(payee_email))  
				  {  
					
				  }  
				  else{
				  jQuery('.first-payee .payee_email').next('.error').html("<p style='color:red;'>You have entered an invalid email address!</p>");
					return false;
				  }
			}
			var payee_email = jQuery('.first-payee .payor_email').val();
			if(payee_email == ''){
				
			}
			else{
				if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(payee_email))  
				  {  
					
				  }  
				  else{
				  jQuery('.first-payee .payor_email').next('.error').html("<p style='color:red;'>You have entered an invalid email address!</p>");
					return false;
				  }
			}
			if(jQuery('#error-msg').hasClass('hide')){ 	} else{  return false; }
			if(jQuery('#phone1').val() != " "){ if(jQuery('#error-msg1').hasClass('hide')){ 	} else{  return false; } }
			if(jQuery('#phone2').val() != " "){ if(jQuery('#error-msg2').hasClass('hide')){ 	} else{  return false; } }
			if(jQuery('#phone3').val() != " "){ if(jQuery('#error-msg3').hasClass('hide')){ 	} else{  return false; } }
			if(jQuery('#phone4').val() != " "){ if(jQuery('#error-msg4').hasClass('hide')){ 	} else{  return false; } }
			if(jQuery('#phone5').val() != " "){ if(jQuery('#error-msg5').hasClass('hide')){ 	} else{  return false; } }
			
			var text = $("#fillzip_status p").text();
			if(text == "Zip code not valid"){ return false; }
			var text = $("#fillzip_status1 p").text();
			if(text == "Zip code not valid"){ return false; }
			var text = $("#fillzip_status2 p").text();
			if(text == "Zip code not valid"){ return false; }
			var text = $("#fillzip_status3 p").text();
			if(text == "Zip code not valid"){ return false; }
			var text = $("#fillzip_status4 p").text();
			if(text == "Zip code not valid"){ return false; }
			var text = $("#fillzip_status6 p").text();
			if(text == "Zip code not valid"){ return false; }
			
			
			jQuery('.step-4').addClass("move-off");
			jQuery('.step-4').removeClass("active-query");
			jQuery(".step-5").addClass("active-query");
			jQuery(".form_steps-4").removeClass("active");
			jQuery(".form_steps-4").next().addClass("active");
			var height = jQuery(".step-5").height();
			var newheight = height + 80;
			jQuery(".my_action_page").css('height', newheight);
		});
		
		
		/********************for back button ******************************/
		
		jQuery(".step-2-1 .submit_btn .back-btn").click( function(event){
			jQuery(".step-2-1").removeClass("active-query");
			jQuery(".step-1").addClass("active-query");
			jQuery(".step-1").removeClass("move-off");
			jQuery(".form_steps-2").removeClass("active");
			jQuery(".form_steps-1").addClass("active");
			
			var height = jQuery(".step-1").height();
			var newheight = height + 80;
			jQuery(".my_action_page").css('height', newheight);
			
		});
		
		jQuery(".step-3-1 .submit_btn .back-btn").click( function(event){
			jQuery(".step-3-1").removeClass("active-query");
			jQuery(".step-2-1").addClass("active-query");
			jQuery(".step-2-1").removeClass("move-off");
			jQuery(".form_steps-3").removeClass("active");
			jQuery(".form_steps-2").addClass("active");
			
			var height = jQuery(".step-2-1").height();
			var newheight = height + 80;
			jQuery(".my_action_page").css('height', newheight);
			
		});
		jQuery(".step-3-2 .submit_btn .back-btn").click( function(event){
			jQuery(".step-3-2").removeClass("active-query");
			jQuery(".step-2-1").addClass("active-query");
			jQuery(".step-2-1").removeClass("move-off");
			jQuery(".form_steps-3").removeClass("active");
			jQuery(".form_steps-2").addClass("active");
			
			
			var height = jQuery(".step-2-1").height();
			var newheight = height + 80;
			jQuery(".my_action_page").css('height', newheight);
			
		});
		jQuery(".step-4 .submit_btn .back-btn").click( function(event){
			
			
			var val = jQuery("#cse_direct_pay").val();
			
			if(val == "cse"){
					
				jQuery(".step-4").removeClass("active-query");
				jQuery(".step-3-1").addClass("active-query");
				jQuery(".step-3-1").removeClass("move-off");
				jQuery(".form_steps-4").removeClass("active");
				jQuery(".form_steps-3").addClass("active");
				
				
				var height = jQuery(".step-3-1").height();
				var newheight = height + 80;
				jQuery(".my_action_page").css('height', newheight);
			}
			else{
					
				jQuery(".step-4").removeClass("active-query");
				jQuery(".step-3-2").addClass("active-query");
				jQuery(".step-3-2").removeClass("move-off");
				jQuery(".form_steps-4").removeClass("active");
				jQuery(".form_steps-3").addClass("active");
				
				
				var height = jQuery(".step-3-2").height();
				var newheight = height + 80;
				jQuery(".my_action_page").css('height', newheight);
			}
			
			
		});
		jQuery(".step-5 .submit_btn .back-btn").click( function(event){
			jQuery(".step-5").removeClass("active-query");
			jQuery(".step-4").addClass("active-query");
			jQuery(".step-4").removeClass("move-off");
			jQuery(".form_steps-5").removeClass("active");
			jQuery(".form_steps-4").addClass("active");
			
			
			var height = jQuery(".step-4").height();
			var newheight = height + 80;
			jQuery(".my_action_page").css('height', newheight);
			
		});
		
		
		jQuery('#add-more').click( function(event){
			event.preventDefault()
			jQuery(this).toggle();
			jQuery('.second-payee').toggle();
			jQuery('.second-payee').addClass('active');
			var height = jQuery(".step-4").height();
				var newheight = height + 80;
				jQuery(".my_action_page").css('height', newheight);
		
		});
		jQuery('#add-more_2').click( function(event){
			event.preventDefault()
			jQuery(this).toggle();
			jQuery('.third-payee').toggle();
			jQuery('.third-payee').addClass('active');
			var height = jQuery(".step-4").height();
				var newheight = height + 80;
				jQuery(".my_action_page").css('height', newheight);
		
		});
		
		jQuery('#remove_2').click( function(e){
			e.preventDefault();
			jQuery('.second-payee').removeClass('active');
			jQuery('.second-payee').toggle();
			jQuery('#add-more').toggle();
			var height = jQuery(".step-4").height();
				var newheight = height + 80;
				jQuery(".my_action_page").css('height', newheight);
		});
		jQuery('#remove_3').click( function(e){
			e.preventDefault();
			jQuery('.third-payee').removeClass('active');
			jQuery('.third-payee').toggle();
			jQuery('#add-more_2').toggle();
			var height = jQuery(".step-4").height();
				var newheight = height + 80;
				jQuery(".my_action_page").css('height', newheight);
		});
		
		/****************ajax for state************/
		
		$( ".state_call" ).change(function() {
		  var name = jQuery('.state_call').val();
	      
		    jQuery.ajax({
			    url: '/county.php',
			    type: "Post",
			    data:  {name: name},
			    success: function(data){
			     //alert(data);
			     jQuery(".county").html(data);
			     
			    },
			    error: function(){} 	        
		   });
		});
		
		$( ".state1" ).change(function() {
		  var name = jQuery('.state1').val();
	      
		    jQuery.ajax({
			    url: '/county.php',
			    type: "Post",
			    data:  {name: name},
			    success: function(data){
			     //alert(data);
			     jQuery("#county1").html(data);
			     
			    },
			    error: function(){} 	        
		   });
		});
		
		$( "#is_this_an_interstate_case" ).change(function() {
			  var is_this_an_interstate_case = jQuery(this).val();
			  var name = jQuery('#country').val();
			  if(is_this_an_interstate_case == 'yes'){
				  $('.form-group.if-yes').css('display', 'block');
				
				var height = jQuery(".step-3-1").height();
				var newheight = height + 80;
				jQuery(".my_action_page").css('height', newheight);
				}
				else{
						 $('.form-group.if-yes').css('display', 'none');
						 var height = jQuery(".step-3-1").height();
						var newheight = height + 80;
						jQuery(".my_action_page").css('height', newheight);
				}
		});
		$( "#do_you_currently_reside_state" ).change(function() {
		var is_this_an_interstate_case = jQuery(this).val();
		  var name = jQuery('#country1').val();
	      if(is_this_an_interstate_case == 'no'){
			   $('.form-group.if-no').css('display', 'block');
		    
				var height = jQuery(".step-3-2").height();
				var newheight = height + 80;
				jQuery(".my_action_page").css('height', newheight);
			}
			else{  $('.form-group.if-no').css('display', 'none'); 
					var height = jQuery(".step-3-2").height();
					var newheight = height + 80;
					jQuery(".my_action_page").css('height', newheight);
				}
		});
		// -----city ajax----------------
		$( "#state" ).change(function() {
		  var state = jQuery('#state').val();
	      
		    jQuery.ajax({
			    url: '/county.php',
			    type: "Post",
			    data:  {state: state},
			    success: function(data){
			     jQuery("#city").html(data);
			     
			    },
			    error: function(){} 	        
		   });
		});
		
		$( "#state_direct" ).change(function() {
		  var state = jQuery('#state_direct').val();
	      
		    jQuery.ajax({
			    url: '/county.php',
			    type: "Post",
			    data:  {state: state},
			    success: function(data){
			     jQuery("#city_direct").html(data);
			     
			    },
			    error: function(){} 	        
		   });
		});
		
		$( ".fill_state" ).change(function() {
		  var state = jQuery(this).val();
		  var city = jQuery(this).attr('rel');
		  
	      //jQuery(this).parent().next().children().hasClass('fill_city').css('display', 'none');
		    jQuery.ajax({
			    url: '/county.php',
			    type: "Post",
			    data:  {state: state},
			    success: function(data){
			     jQuery('.'+city).html(data);
			     
			    },
			    error: function(){} 	        
		   });
		});
		
		// validation for direct pay
		jQuery('#your_child_support_order_number').keyup( function() {
		  jQuery(this).next('.error').find('p').remove();
		  
		});
		jQuery('#country1').change( function() {
		  jQuery(this).next('.error').find('p').remove();
		  
		});
		jQuery('#full_address_street1').keyup( function() {
		  jQuery(this).next('.error').find('p').remove();
		  
		});
		jQuery('#city1').keyup( function() {
		  jQuery(this).next('.error').find('p').remove();
		  
		});
		jQuery('#state1').keyup( function() {
		  jQuery(this).next('.error').find('p').remove();
		  
		});
		jQuery('#zipcode1').keyup( function() {
		  jQuery(this).next('.error').find('p').remove();
		  
		});
		
		// validation for cse
		jQuery('#your_case_number').keyup( function() {
		  jQuery(this).next('.error').find('p').remove();
		  
		});
		jQuery('#country').change( function() {
		  jQuery(this).next('.error').find('p').remove();
		  
		});
		jQuery('#full_address_street').keyup( function() {
		  jQuery(this).next('.error').find('p').remove();
		  
		});
		jQuery('#city').keyup( function() {
		  jQuery(this).next('.error').find('p').remove();
		  
		});
		jQuery('#state').keyup( function() {
		  jQuery(this).next('.error').find('p').remove();
		  
		});
		jQuery('#zipcode').keyup( function() {
		  jQuery(this).next('.error').find('p').remove();
		  
		});
		
		// validation payee first
		jQuery('.first-payee .payee_first_name').keyup( function() {
		  jQuery(this).next('.error').find('p').remove();
		  
		});
		jQuery('.first-payee .payee_last_name').keyup( function() {
		  jQuery(this).next('.error').find('p').remove();
		  
		});
		jQuery('.first-payee .payee_street_address').keyup( function() {
		  jQuery(this).next('.error').find('p').remove();
		  
		});
		jQuery('.first-payee .payee_city').keyup( function() {
		  jQuery(this).next('.error').find('p').remove();
		  
		});
		jQuery('.first-payee .payee_zip_code').keyup( function() {
		  jQuery(this).next('.error').find('p').remove();
		  
		});
		jQuery('.first-payee .payee_cell_phone').keyup( function() {
		  jQuery(this).next('.error').find('p').remove();
		  
		});
		jQuery('.first-payee .payee_email').keyup( function() {
		  jQuery(this).next('.error').find('p').remove();
		  
		});
		
		
		jQuery(".payee_cell_phone").mask("(999) 999-9999");
		jQuery(".payor_cell_phone").mask("(999) 999-9999");
		
		
		/***********************For Email VAlidation *******************************/
		
		
		$("#email").blur(function(){
			var email = jQuery(this).val();
			
		  
			jQuery.ajax({
				url: 'county.php',
				type: "Post",
				data:  {email: email},
				success: function(data){
					alert(data);
				  $('#status').html(data);
				 
				},
				beforeSend: function(){
					$('#status').html("");
					$('.loading').css('display', 'block');
				},
				complete: function(){
					$('.loading').css('display', 'none');
				},
				error: function(){} 	        
		   });
		});
		
		$("#zipcode").blur(function(){
			var zip = jQuery(this).val();
			var state1 = jQuery('#state').val();
			var city1 = jQuery('#city').val();
			
			jQuery.ajax({
				url: 'county.php',
				type: "Post",
				data:  {zip: zip, state1:state1, city1:city1},
				success: function(data){
				  $('#zip_status').html(data);
				 
				},
				beforeSend: function(){
					$('#zip_status').html("");
					$('.loading').css('display', 'block');
				},
				complete: function(){
					$('.loading').css('display', 'none');
				},
				error: function(){} 	        
		   });
		});
		$("#zipcode1").blur(function(){
			var zip = jQuery(this).val();
			var state1 = jQuery('#state_direct').val();
			var city1 = jQuery('#city_direct').val();
			
			jQuery.ajax({
				url: 'county.php',
				type: "Post",
				data:  {zip: zip, state1:state1, city1:city1},
				success: function(data){
				  $('#zip_status1').html(data);
				 
				},
				beforeSend: function(){
					$('#zip_status1').html("");
					$('.loading').css('display', 'block');
				},
				complete: function(){
					$('.loading').css('display', 'none');
				},
				error: function(){} 	        
		   });
		});
		
		$("#fill_zip").blur(function(){
			var zip = jQuery(this).val();
			var state1 = jQuery('.fill_state').val();
			var city1 = jQuery('.fill_city').val();
			
			jQuery.ajax({
				url: 'county.php',
				type: "Post",
				data:  {zip: zip, state1:state1, city1:city1},
				success: function(data){
				  $('#fillzip_status').html(data);
				 
				},
				beforeSend: function(){
					$('#fillzip_status').html("");
					$('.loading').css('display', 'block');
				},
				complete: function(){
					$('.loading').css('display', 'none');
				},
				error: function(){} 	        
		   });
		});
		
		$("#payor_zip1").blur(function(){
			var zip = jQuery(this).val();
			var state1 = jQuery('#payee_state1').val();
			var city1 = jQuery('.fill_city1').val();
			
			jQuery.ajax({
				url: 'county.php',
				type: "Post",
				data:  {zip: zip, state1:state1, city1:city1},
				success: function(data){
				  $('#fillzip_status1').html(data);
				 
				},
				beforeSend: function(){
					$('#fillzip_status1').html("");
					$('.loading').css('display', 'block');
				},
				complete: function(){
					$('.loading').css('display', 'none');
				},
				error: function(){} 	        
		   });
		});
		$("#payee_zip1").blur(function(){
			var zip = jQuery(this).val();
			var state1 = jQuery('#payee_state2').val();
			var city1 = jQuery('.fill_city2').val();
			
			jQuery.ajax({
				url: 'county.php',
				type: "Post",
				data:  {zip: zip, state1:state1, city1:city1},
				success: function(data){
				  $('#fillzip_status2').html(data);
				 
				},
				beforeSend: function(){
					$('#fillzip_status2').html("");
					$('.loading').css('display', 'block');
				},
				complete: function(){
					$('.loading').css('display', 'none');
				},
				error: function(){} 	        
		   });
		});
		$("#payor_zip2").blur(function(){
			var zip = jQuery(this).val();
			var state1 = jQuery('#payor_state2').val();
			var city1 = jQuery('.fill_city4').val();
			
			jQuery.ajax({
				url: 'county.php',
				type: "Post",
				data:  {zip: zip, state1:state1, city1:city1},
				success: function(data){
				  $('#fillzip_status3').html(data);
				 
				},
				beforeSend: function(){
					$('#fillzip_status3').html("");
					$('.loading').css('display', 'block');
				},
				complete: function(){
					$('.loading').css('display', 'none');
				},
				error: function(){} 	        
		   });
		});
		$("#payee_zip2").blur(function(){
			var zip = jQuery(this).val();
			var state1 = jQuery('#payee_state3').val();
			var city1 = jQuery('.fill_city3').val();
			
			jQuery.ajax({
				url: 'county.php',
				type: "Post",
				data:  {zip: zip, state1:state1, city1:city1},
				success: function(data){
				  $('#fillzip_status4').html(data);
				 
				},
				beforeSend: function(){
					$('#fillzip_status4').html("");
					$('.loading').css('display', 'block');
				},
				complete: function(){
					$('.loading').css('display', 'none');
				},
				error: function(){} 	        
		   });
		});
		$("#payor_zip5").blur(function(){
			var zip = jQuery(this).val();
			var state1 = jQuery('#payee_state3').val();
			var city1 = jQuery('.fill_city5').val();
			
			jQuery.ajax({
				url: 'county.php',
				type: "Post",
				data:  {zip: zip, state1:state1, city1:city1},
				success: function(data){
				  $('#fillzip_status5').html(data);
				 
				},
				beforeSend: function(){
					$('#fillzip_status5').html("");
					$('.loading').css('display', 'block');
				},
				complete: function(){
					$('.loading').css('display', 'none');
				},
				error: function(){} 	        
		   });
		});
		$("#payor_zip5").blur(function(){
			var zip = jQuery(this).val();
			var state1 = jQuery('#payor_state3').val();
			var city1 = jQuery('.fill_city6').val();
			
			jQuery.ajax({
				url: 'county.php',
				type: "Post",
				data:  {zip: zip, state1:state1, city1:city1},
				success: function(data){
				  $('#fillzip_status6').html(data);
				 
				},
				beforeSend: function(){
					$('#fillzip_status6').html("");
					$('.loading').css('display', 'block');
				},
				complete: function(){
					$('.loading').css('display', 'none');
				},
				error: function(){} 	        
		   });
		});
		
		
		
});
		
		

