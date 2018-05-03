<?php
    require_once "connect.php" ;
	
	 if (isset($_POST['btn_reg'])) 
    {
		
           
            $fname = $_POST['firstname'] ;
          
            $iden = $_POST['ssnpassport'] ;
            $person_img = $_POST['pic'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $birthdate = $_POST['datebirth'];
            $q1 = $_POST['question1'];
            $ans_q1 = $_POST['answer1'];
            $q2 = $_POST['question2'];
            $ans_q2 = $_POST['answer2'];
            $q3 = $_POST['question3'];
            $ans_q3 = $_POST['answer3'];
            $email = $_POST['email'];
            $status = "WAIT" ;
            $point = 0 ; 
            $stmt = $conn->prepare("INSERT INTO users VALUES (NULL, '$fname', '$iden', '$username', '$password', 
                                            '$birthdate', '$person_img', '$q1', '$q2', '$q3', '$ans_q1',
                                             '$ans_q2', '$ans_q3', '$email', '$status',
                                            '$point');");
            $stmt->execute();
			
            header("Location:Success.php");
        
    }else {
    }

?>