<?php
    require_once "connect.php" ;
    
    if (isset($_POST['ssnpassport'])) 
    {
        $ssnpassport = $conn->quote($_POST['ssnpassport']);
        if (!empty($ssnpassport)) 
    {
            $stmt = $conn->prepare("SELECT * FROM users WHERE personID =$ssnpassport");
            $stmt->execute();
            $count= $stmt->fetchColumn(); 
             if($count==0)
             {
               $arr = array('count' => $count,
                            'dataAlert' => "You can use this identification card " 
             );
             }
            else
            {
                $arr = array('count' => $count,
                'dataAlert' => "Identification Card Already Exist"
            );
            }
            echo json_encode($arr);
    }
}
?>