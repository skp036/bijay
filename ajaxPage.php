<?php
	global $conn;
	$conn = mysqli_connect('localhost', 'root', '', 'demof');  
	// print_r($_POST);
	$merchect_id = 'pspl123';
	if($_POST['merchect_id'] == $merchect_id){

		$mainArray = [
			"status" 		=> '200',
			"merchent_kyy"	=> $merchect_id,
			"apiKey" 		=> 'psplApiKey123'
		];
		
		return $mainArray
	}


?>