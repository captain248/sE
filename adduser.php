<?php
    require_once "connect.php" ;
	
	 if (isset($_POST['btn_reg'])) 
    {
		
           
            $fname = $_POST['firstname'] ;
            $lname = $_POST['lastname'] ;
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
                                            '$point','$lname');");
            $stmt->execute();
			
            header("Location:Success.php");
        
    }else {
    }
	
	
	
	
  /*  
    if (isset($_POST['dataUser'])) 
    {
        
        $data = utf8_encode($_POST['dataUser']);
        $data = json_decode($data);
        if (!empty($data)) 
        {       
            $fname = $data->firstname ;
            $lname = $data->lastname ;
            $iden = $data->ssnpassport ;
            $person_img = $data->pic;
            $username = $data->username;
            $password = $data->password;
            $birthdate = $data->datebirth;
            $q1 = $data->question1;
            $ans_q1 = $data->answer1;
            $q2 = $data->question2;
            $ans_q2 = $data->answer2;
            $q3 = $data->question3;
            $ans_q3 = $data->answer3;
            $email = $data->email;
            $status = "WAIT" ;
            $point = 0 ; 
            $stmt = $conn->prepare("INSERT INTO users VALUES (NULL, '$fname', '$iden', '$username', '$password', 
                                            '$birthdate', '$person_img', '$q1', '$q2', '$q3', '$ans_q1',
                                             '$ans_q2', '$ans_q3', '$email', '$status',
                                            $point,'$lname');");
            $stmt->execute();
            $arr = array(
                        'insertResult'=> true 
            );
        }else {
        }
    }else {
    }
    echo json_encode($arr);
	*/
?>