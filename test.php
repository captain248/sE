<?php 
session_start();
echo "chaiyo";

if(isset($_SESSION['fname'])){
	echo "halow".$_SESSION['fname'];
	echo "halow".$_SESSION['lname'];
}

?>