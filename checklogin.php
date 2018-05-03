<?php
	session_start();
	require('connect.php');




	$sql = "SELECT * FROM users WHERE userName = '" .$_POST['username']."' ";
	$sql .= "AND password ='".$_POST['password']."' ";
	$result = $conn->query($sql);
	
	


	if($row = $result->fetch()){
		$_SESSION['userid'] = $row["userID"];
		$_SESSION['fname'] = $row["fname"];
		$_SESSION['personID'] = $row["personID"];
		$_SESSION['userName'] = $row["userName"];
		$_SESSION['password'] = $row["password"];
		$_SESSION['birthDate'] = $row["birthDate"];
		$_SESSION['personImage'] = $row["personImage"];
		$_SESSION['qNO1'] = $row["qNO1"];
		$_SESSION['qNO2'] = $row["qNO2"];
		$_SESSION['qNO3'] = $row["qNO3"];
   	$_SESSION['question1'] = $row["question1"];
		$_SESSION['question2'] = $row["question2"];
		$_SESSION['question3'] = $row["question3"];
		$_SESSION['userEmail'] = $row["userEmail"];
		$_SESSION['status'] = $row["status"];
		$_SESSION['userPoint'] = $row["userPoint"];
	

		$arr = array('check' => "pass",
														'dataAlert' => "" ,
														'status'=> $row["status"]

													);					

		
		
		
	}else{
		$arr = array('check' => "notpass",
														'dataAlert' => "Username & Password Incorrect" 
													);					
		
		
	}
	echo json_encode($arr);
?>





