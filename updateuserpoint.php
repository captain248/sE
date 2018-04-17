<?php
    require_once "connect.php" ;     
    $username = $_GET["username"];
	 if (isset($_POST['point'])) 
    {
            $point = $_POST['point']+1;
            $stmt = $conn->prepare("UPDATE users SET userPoint=$point WHERE userName = '$username' ");
            $stmt->execute();
            echo json_encode($point);
    }

?>