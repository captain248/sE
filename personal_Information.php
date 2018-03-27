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
$as1="";$as2="";$as3="";

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

//forqustion
if($_SESSION["qNO1"]=='1')
$question1 = "What work do you do?";
else if($_SESSION["qNO1"]=='2')
$question1 = "What is your full name?";
else
$question1 = "What is your favourite hobby?";

for($i= 0; $i < strlen($_SESSION["question1"]); $i++){
	$as1 = $as1."x";
}

if($_SESSION["qNO2"]=='1')
$question2 = "What do you like to read?";
else if($_SESSION["qNO2"]=='2')
$question2 = "What seasons do you like?";
else
$question2 = "What country do you like most?";

for($i= 0; $i < strlen($_SESSION["question2"]); $i++){
	$as2 = $as2."x";
}

if($_SESSION["qNO3"]=='1')
$question3 = "How many people are there in your family?";
else if($_SESSION["qNO3"]=='2')
$question3 = "Where do you like to watch movies?";
else
$question3 = "What is the capital of your country?";

for($i= 0; $i < strlen($_SESSION["question2"]); $i++){
	$as3 = $as3."x";
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
<hr>



						<form class="form-edit row rowspace-5">
							<div class="form-group ">
								<div class="col-xs-2 col-sm-2 col-md-2">
									ชื่อ-นามสกุล
								</div>
								<div class="col-xs-10 col-sm-10 col-md-10">
									<input type="text" id="test" name="test" class="form-control " value="<?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?> " disabled>
								</div>
							</div>

							<div class="col-xs-12 col-sm-12 col-md-12"><br></div>
							<div class="form-group ">
								<div class="col-xs-2 col-sm-2 col-md-2">ssn/passport</div>
								<div class="col-xs-8 col-sm-8 col-md-8">
									<input type="text" class="form-control " value="<?php echo $ssn; ?>" disabled>
								</div>
								<div class="col-xs-2 col-sm-2 col-md-2">
									<a href="#">
										<span  class="glyphicon glyphicon-log-in"></span>แก้ไข</a>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12"><br></div>
							<div class="form-group">
								<div class="col-xs-2 col-sm-2 col-md-2">
									username
								</div>
								<div class="col-xs-10 col-sm-10 col-md-10">
									<input type="text" id="test" name="test" class="form-control " value="<?php echo $_SESSION['userName'] ?> " disabled>
								</div>
							</div>
							
							<div class="col-xs-12 col-sm-12 col-md-12"><br></div>
							<div class="form-group ">
								<div class="col-xs-2 col-sm-2 col-md-2">password</div>
								<div class="col-xs-8 col-sm-8 col-md-8">
									<input type="text" class="form-control " value="<?php echo $pass; ?>" disabled>
								</div>
								<div class="col-xs-2 col-sm-2 col-md-2">
									<a href="#">
										<span  class="glyphicon glyphicon-log-in"></span>change password</a>
								</div>
							</div>

<div class="col-xs-12 col-sm-12 col-md-12"><br></div>
							<div class="form-group">
								<div class="col-xs-2 col-sm-2 col-md-2">
									วันเกิด
								</div>
								<div class="col-xs-10 col-sm-10 col-md-10">
									<input type="text" id="test" name="test" class="form-control " value="<?php echo $_SESSION['birthDate'] ?> " disabled>
								</div>
							</div>

<div class="col-xs-12 col-sm-12 col-md-12"><br></div>
							<div class="form-group">
								<div class="col-xs-2 col-sm-2 col-md-2">
									คำถาม1
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<input type="text" id="test" name="test" class="form-control " value="<?php echo $question1 ?> " disabled>
								</div>
								<div class="col-xs-4 col-sm-4 col-md-4">
									<input type="text" id="test" name="test" class="form-control " value="<?php echo $as1 ?> " disabled>
								</div>
							</div>

<div class="col-xs-12 col-sm-12 col-md-12"><br></div>
							<div class="form-group">
								<div class="col-xs-2 col-sm-2 col-md-2">
									คำถาม2
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<input type="text" id="test" name="test" class="form-control " value="<?php echo $question2 ?> " disabled>
								</div>
								<div class="col-xs-4 col-sm-4 col-md-4">
									<input type="text" id="test" name="test" class="form-control " value="<?php echo $as2 ?> " disabled>
								</div>
							</div>

<div class="col-xs-12 col-sm-12 col-md-12"><br></div>
							<div class="form-group">
								<div class="col-xs-2 col-sm-2 col-md-2">
									คำถาม3
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<input type="text" id="test" name="test" class="form-control " value="<?php echo $question3 ?> " disabled>
								</div>
								<div class="col-xs-4 col-sm-4 col-md-4">
									<input type="text" id="test" name="test" class="form-control " value="<?php echo $as3 ?> " disabled>
								</div>
							</div>							

<div class="col-xs-12 col-sm-12 col-md-12"><br></div>
							<div class="form-group">
								<div class="col-xs-2 col-sm-2 col-md-2">
									เมล
								</div>
								<div class="col-xs-10 col-sm-10 col-md-10">
									<input type="text" id="test" name="test" class="form-control " value="<?php echo $_SESSION['userEmail'] ?> " disabled>
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