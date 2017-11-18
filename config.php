<?php
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "Rut#0258";
	$dbname = "getpaid";
 try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

?>

<?php
/*!
* HybridAuth
* http://hybridauth.sourceforge.net | http://github.com/hybridauth/hybridauth
* (c) 2009-2012, HybridAuth authors | http://hybridauth.sourceforge.net/licenses.html
*/

// ----------------------------------------------------------------------------------------
//	HybridAuth Config file: http://hybridauth.sourceforge.net/userguide/Configuration.html
// ----------------------------------------------------------------------------------------
$config =array(
		"base_url" => "http://35.196.143.136/getpaid/hybridauth/index.php", 
		"providers" => array ( 

			"Google" => array ( 
				"enabled" => true,
				"keys"    => array ( "id" => "349060752209-1smlfqjsfncu2t73ecq51vl4ajegn7hh.apps.googleusercontent.com", "secret" => "0UQRSomqgfPDTrNy-CSwcbDT" ), 
			),

			"Facebook" => array ( 
				"enabled" => true,
				"keys"    => array ( "id" => "126327014705881", "secret" => "21f3e4b0c659d89a0a697ba339871ac8" ), 
			),

			
		),
		// if you want to enable logging, set 'debug_mode' to true  then provide a writable file by the web server on "debug_file"
		"debug_mode" => false,
		"debug_file" => "",
	);
	
$base_url = 'getpaid';

if(isset($_POST['logout'])){ 
		session_destroy();
		header("Location: /".$base_url);
}


