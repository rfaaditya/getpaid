<?php
        include('config.php');
        include('hybridauth/Hybrid/Auth.php');
        if(isset($_GET['provider']))
        {
        	$provider = $_GET['provider'];
        	
        	try{
        	
        	$hybridauth = new Hybrid_Auth( $config );
        	
        	$authProvider = $hybridauth->authenticate($provider);

	        $user_profile = $authProvider->getUserProfile();
	        
			if($user_profile && isset($user_profile->identifier))
	        {
	        	
	        	try {
					
					$stmt = $conn->prepare("SELECT email, id FROM users where email = '$user_profile->email'"); 
					$stmt->execute();

					// set the resulting array to associative
					$result = $stmt->fetchAll(); 
					
					if(!empty($result)){
						$_SESSION['email'] = $user_profile->email;
						header('location: /'.$base_url);
					}
					else{
							$sql = "INSERT INTO users (name, email)
							VALUES ('$user_profile->displayName', '$user_profile->email')";
							// use exec() because no results are returned
							$conn->exec($sql);
							
							$_SESSION['email'] = $user_profile->email;
							
							header('location: /'.$base_url);
					}
					
				}
				catch(PDOException $e) {
					echo "Error: " . $e->getMessage();
				}
	        	 
	        	
	        }	        

			}
			catch( Exception $e )
			{ 
			
				 switch( $e->getCode() )
				 {
                        case 0 : echo "Unspecified error."; break;
                        case 1 : echo "Hybridauth configuration error."; break;
                        case 2 : echo "Provider not properly configured."; break;
                        case 3 : echo "Unknown or disabled provider."; break;
                        case 4 : echo "Missing provider application credentials."; break;
                        case 5 : echo "Authentication failed. "
                                         . "The user has canceled the authentication or the provider refused the connection.";
                                 break;
                        case 6 : echo "User profile request failed. Most likely the user is not connected "
                                         . "to the provider and he should to authenticate again.";
                                 $twitter->logout();
                                 break;
                        case 7 : echo "User not connected to the provider.";
                                 $twitter->logout();
                                 break;
                        case 8 : echo "Provider does not support this feature."; break;
                }

                // well, basically your should not display this to the end user, just give him a hint and move on..
                echo "<br /><br /><b>Original error message:</b> " . $e->getMessage();
				
				echo "<br><a href='/'> Back To login page</a>";
				
                //echo "<hr /><h3>Trace</h3> <pre>" . $e->getTraceAsString() . "</pre>";

			}
        
        }
        
?>
