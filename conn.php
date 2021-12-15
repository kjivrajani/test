<?php 
			$dbhost = 'localhost';
		$dbuser = 'root';
		$dbpass = '';
		$db = 'forgetpass';
        $conn = new mySqli($dbhost,$dbuser,$dbpass,$db);

        if($conn->connect_error) {
            die('Could not connect to the database.');
        }else{
			//echo "okay conn";
		}
?>