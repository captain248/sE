<?php session_start(); ?>

<html lang="en">

  <head >
	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>SWEET-HOME-REGISTER</title>
	<link rel="icon" type="image/x-icon" href="image/logo.ico" />
    <!-- Custom styles for this template -->
    <link href="css/blog-post.css" rel="stylesheet">
    
	<style type="text/css">
		.btn {
    border: none;
    color: white;
    padding: 14px 28px;
    font-size: 16px;
    cursor: pointer;
}

.success {background-color: #4CAF50;} /* Green */
.success:hover {background-color: #46a049;}

.info {background-color: #2196F3;} /* Blue */
.info:hover {background: #0b7dda;}

.warning {background-color: #ff9800;} /* Orange */
.warning:hover {background: #e68a00;}

.danger {background-color: #f44336;} /* Red */ 
.danger:hover {background: #da190b;}

.default {background-color: #e7e7e7; color: black;} /* Gray */ 
.default:hover {background: #ddd;}
	</style>
	
	
	
  </head>

  <body>
	<!--tapmenu and banner-->
	<?php include("header.php") ?>



<button class="btn info" name="btn_reg" id="btn_reg" data-toggle="modal" data-target="#login-modal">Register</button>

	</body>