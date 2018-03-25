<?php
    require_once "connect.php" ;
    
    if (isset($_POST['username'])) 
    {
        $username = $conn->quote($_POST['username']);
        if (!empty($username)) 
    {
            $stmt = $conn->prepare("SELECT * FROM users WHERE userName =$username");
            $stmt->execute();
            $count= $stmt->fetchColumn(); 
             if($count==0)
             {
               $arr = array('count' => $count,
                            'dataAlert' => "You can use this username " 
             );
             }
            else
            {
                $arr = array('count' => $count,
                'dataAlert' => "Username already exist"
            );
            }
            echo json_encode($arr);
    }
}
?>