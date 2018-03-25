
<?php
    require_once "connect.php" ;
    
    if (isset($_POST['email'])) 
    {
        $email = $conn->quote($_POST['email']);
        if (!empty($email)) 
    {
            $stmt = $conn->prepare("SELECT * FROM users WHERE userEmail =$email");
            $stmt->execute();
            $count= $stmt->fetchColumn(); 
             if($count > 0)
             {
               $arr = array('count' => $count,
                            'dataAlert' => "Email is Already Exist" 
             );
             }
            else
            {
                $arr = array('count' => $count,
                'dataAlert' => "You can use this e-mail"
            );
            }
            echo json_encode($arr);
    }
}
?>