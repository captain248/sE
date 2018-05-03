<?php
    require_once "connect.php" ;     
    $username = $_POST["username"];
    $point = $_POST['point'];
    $stmt = $conn->prepare("UPDATE users SET userPoint=$point WHERE userName = '$username' ");
    $stmt->execute();
    echo $point;
?>