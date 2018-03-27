<?php 
session_start();
if(empty($_SESSION)){
	header("Location:index.php");
}else{
	
}
?>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
	    crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>SWEET-HOME-REGISTER</title>
	<link rel="icon" type="image/x-icon" href="image/logo.ico" />
	<!-- Custom styles for this template -->
	<link href="css/blog-post.css" rel="stylesheet">




</head>

<body>

	<?php include("header.php") ?>

<?php
$pass ="";
$ssn = "";

//for ssn
for($i= 0; $i < strlen($_SESSION["personID"]); $i++){
    if($i > 2)
	$ssn = $ssn."x";
  else
	$ssn = $ssn.$_SESSION["personID"][$i];
}

//for password
for($i= 0; $i < strlen($_SESSION["password"]); $i++){
	$pass = $pass."x";
}
?>


	<div class="container">
		<div class="row">
			<div class="col-sm-1 col-md-1 col-xs-1 col-lg-1 col-lg-1"></div>
			<div class="jumbotron col-xs-10 col-sm-10 col-md-10 col-lg-10">
				<div class="row">
					<div class="col-sm-2 col-md-2 col-xs-2 col-lg-2"></div>
					<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
						<h3>ข้อมูลส่วนตัว</h3>




						<form class="form-edit row rowspace-5">
							<div class="form-group ">
								<div class="col-xs-3 col-sm-3 col-md-3">
									ชื่อ-นามสกุล
								</div>
								<div class="col-xs-9 col-sm-9 col-md-9">
									<input type="text" id="test" name="test" class="form-control " value="<?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?> " disabled>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12"><br></div>
							<div class="form-group ">
								<div class="col-xs-3 col-sm-3 col-md-3">ssn/passport</div>
								<div class="col-xs-7 col-sm-7 col-md-7">
									<input type="text" class="form-control " value="<?php echo $ssn; ?>" disabled>
								</div>
								<div class="col-xs-2 col-sm-2 col-md-2">
									<a href="#">
										<span style="padding-top: 15px" class="glyphicon glyphicon-log-in"></span>แก้ไข</a>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12"><br></div>
							<div class="form-group">
								<div class="col-xs-3 col-sm-3 col-md-3">
									username
								</div>
								<div class="col-xs-9 col-sm-9col-md-9">
									<input type="text" id="test" name="test" class="form-control " value="<?php echo $_SESSION['userName'] ?> " disabled>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12"><br></div>
							<div class="form-group ">
								<div class="col-xs-3 col-sm-3 col-md-3">password</div>
								<div class="col-xs-7 col-sm-7 col-md-7">
									<input type="text" class="form-control " value="<?php echo $pass; ?>" disabled>
								</div>
								<div class="col-xs-2 col-sm-2 col-md-2">
									<a href="#">
										<span style="padding-top: 15px" class="glyphicon glyphicon-log-in"></span>แก้ไข</a>
								</div>
							</div>








						 </form>

					</div>
				</div>


			</div>
		</div>
	</div>








	<?php include("footer.html")?>
</body>



</html>