<?php
	session_start();
	require('connect.php');

	$sql = "SELECT * FROM users WHERE userName = '" .$_POST['username']."' ";
	
	$result = $conn->query($sql);
	if($row = $result->fetch()){
		

		$arr = array('check' => "pass",
														'dataAlert' => "" 
													);					

		
		
		
	}else{
		$arr = array('check' => "notpass",
														'dataAlert' => "Username & Password Incorrect" 
													);					
		
		
	}
	echo json_encode($arr);

	
?>





