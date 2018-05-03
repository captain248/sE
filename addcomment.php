<?php
  require_once "connect.php" ;
  $idsource = $_POST['ids'];
  $username = $_POST['username'];
  $detail = $_POST['detail'];
  
  $query = "INSERT INTO comment VALUES (NULL, ?, ?, ?, NULL)";
  $stmt = $conn->prepare($query);
  $stmt->bindParam(1,$username);
  $stmt->bindParam(2,$idsource);
  $stmt->bindParam(3,$detail);
  $stmt->execute();
  date_default_timezone_set("Asia/Bangkok");
	$d = new DateTime();
  echo $d->format('Y-m-d H:i:s');         
   

?>