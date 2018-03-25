
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>SWEET-HOME-REGISTER</title>
	<link rel="icon" type="image/x-icon" href="image/logo.ico" />
	<!-- Custom styles for this template -->
	<link href="css/blog-post.css" rel="stylesheet">




</head>

<body>

	<table background="pic/banner.png" height=40% width=100% style="background-repeat: no-repeat;background-size: 100% 100%, auto;">
		<tr>
			<td align="right" valign="top">
				<?php 
				if ($_SESSION == null) {
					include("login.php");
					echo "<a href=\"Registerform.php\" style=\"color:white;\" id=\"reg\"><span class=\"glyphicon glyphicon-user\"></span> Register</a>"	;
					
						}
		else{
					echo "HELLO คุณ <a href=\"personal_information.php\" style=\"color:white;\">".$_SESSION['fname']."</a><br>";
					echo "<a href=\"logout.php\" style=\"color:white;\" class=\"glyphicon glyphicon-log-out\">Logout </a>";
		}
			
	
		?>

			</td>
		</tr>

	</table>


	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
			</div>






			<ul class="nav navbar-nav">
				<li class="active dropdown">
					<a class="dropbtn" href="index.php" id="home">Home</a>
					<div class="dropdown-content">
						<a href="page_news.php?id=1" id="newsh">news &amp; announcements</a>
					</div>

				</li>
				<li class="active">
					<a href="index.php" id="knowledge source</a></li>
    </ul>">knowledge source</a>
				</li>
			</ul>
			<ul class="nav navbar-nav">
				<li class="active">
					<a href="index.php" id="event">Event</a>
				</li>
			</ul>
			<ul class="nav navbar-nav">
				<li class="active">
					<a href="index.php" id="about">About Us</a>
				</li>
			</ul>



		</div>
	</nav>

	<div class="container">
		<div class="row">
			<div class="col-sm-2 col-md-2 col-xs-2 col-lg-2 col-lg-2"></div>
			<div class="jumbotron col-xs-8 col-sm-8 col-md-8 col-lg-8">

				<div class="row2">
					<div class="col-sm-1 col-md-1 col-xs-1 col-lg-1"></div>
					<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">

						<div class="row">
							<div class="col-xs-3 col-sm-3 col-md-3" style="padding-top: 15px">ชื่อ-นามสกุล</div>
							<div class="col-xs-9 col-sm-9 col-md-9">
								<div class="panel panel-default">
									<div class="panel-body">
										<?php echo $_SESSION['fname']."		".$_SESSION['lname']; ?>
									</div>
								</div>
							</div>


							<div class="col-xs-3 col-sm-3 col-md-3" style="padding-top: 15px">ssn/passport</div>
							<div class="col-xs-9 col-sm-9 col-md-9">
								<div class="panel panel-default">
									<div class="panel-body">
										<?php echo $_SESSION['personID']; ?>
									</div>
								</div>
							</div>


							<div class="col-xs-3 col-sm-3 col-md-3" style="padding-top: 15px">Username</div>
							<div class="col-xs-9 col-sm-9 col-md-9">
								<div class="panel panel-default">
									<div class="panel-body">
										<?php echo $_SESSION['userName']; ?>
									</div>
								</div>
							</div>


							<div class="col-xs-3 col-sm-3 col-md-3" style="padding-top: 15px">Password</div>
							<div class="col-xs-9 col-sm-9 col-md-9">
								<div class="panel panel-default">
									<div class="panel-body">
										<?php echo $_SESSION['password']; ?>
									</div>
								</div>
							</div>


							<div class="col-xs-3 col-sm-3 col-md-3" style="padding-top: 15px">ssn/passport</div>
							<div class="col-xs-9 col-sm-9 col-md-9">
								<div class="panel panel-default">
									<div class="panel-body">
										<?php echo $_SESSION['personID']; ?>
									</div>
								</div>
							</div>


							<div class="col-xs-3 col-sm-3 col-md-3" style="padding-top: 15px">ssn/passport</div>
							<div class="col-xs-9 col-sm-9 col-md-9">
								<div class="panel panel-default">
									<div class="panel-body">
										<?php echo $_SESSION['personID']; ?>
									</div>
								</div>
							</div>


						</div>
					</div>
				</div>
			</div>
		</div>
	</div>








	<?php include("footer.html")?>
</body>


</html>