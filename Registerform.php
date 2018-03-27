<?php session_start(); ?>

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

	<style type="text/css">
		.btn {
			border: none;
			color: white;
			padding: 14px 28px;
			font-size: 16px;
			cursor: pointer;
		}

		.success {
			background-color: #4CAF50;
		}

		/* Green */

		.success:hover {
			background-color: #46a049;
		}

		.info {
			background-color: #2196F3;
		}

		/* Blue */

		.info:hover {
			background: #0b7dda;
		}

		.warning {
			background-color: #ff9800;
		}

		/* Orange */

		.warning:hover {
			background: #e68a00;
		}

		.danger {
			background-color: #f44336;
		}

		/* Red */

		.danger:hover {
			background: #da190b;
		}

		.default {
			background-color: #e7e7e7;
			color: black;
		}

		/* Gray */

		.default:hover {
			background: #ddd;
		}
	</style>



</head>

<body>
	<!--tapmenu and banner-->
	<?php include("header.php") ?>



	<div class="container">
		<div class="row">
			<div class="col-sm-2 col-md-2 col-xs-2 col-lg-2 col-lg-2"></div>
			<div class="jumbotron col-xs-8 col-sm-8 col-md-8 col-lg-8">




				<div class="row2">
					<div class="col-sm-1 col-md-1 col-xs-1 col-lg-1"></div>
					<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">

						<form role="form" id="my_form" name="my_form" method="post" action="adduser.php">
							<h2>Please Sign Up</h2>

							<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-6">
									<div class="form-group">
										<label class="control-label" for="first_name">First Name</label>
										<input type="text" name="firstname" id="firstname" class="form-control input-lg" placeholder="First Name" tabindex="1" required>
										<p id=err_firstname></p>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-6">
									<div class="form-group">
										<label class="control-label" for="last_name">Last Name</label>
										<input type="text" name="lastname" id="lastname" class="form-control input-lg" placeholder="Last Name" required>
										<p id=err_lastname></p>
									</div>
								</div>
							</div>




							<div class="form-group">
								<label class="control-label" for="ssn/passport">SSN/Passport</label>
								<input type="text" name="ssnpassport" id="ssnpassport" class="form-control input-lg" placeholder="ssn/passport" required>
								<p id=err_ssn></p>
							</div>

							<div class="form-group">
								<label for="input-folder-1">Upload File From Folder</label>
								<div class="file-loading input-lg">
									<input id="pic" name="pic" type="file" accept="image/*" data-type="image" required>
									<p id=err_pic></p>
								</div>

							</div>
							<script>
								$(document).on('ready', function () {
									$("#input-folder-1").fileinput({
										browseLabel: 'Select Folder...'
									});
								});
							</script>



							<div class="form-group">
								<label class="control-label" for="Username">Username</label>
								<input type="text" name="username" id="username" class="form-control input-lg" placeholder="Username" required>
								<p id=err_username></p>
							</div>

							<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-6">
									<div class="form-group">
										<label class="control-label" for="password">Password</label>
										<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" title="Must contain at least one number and one uppercase and lowercase letter and can use speical charecter (-_), and at least 16 or more characters"
										  required>
										<p id=err_password></p>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-6">
									<div class="form-group">
										<label class="control-label" for="password_confirmation">Confirm-Password</label>
										<input type="password" name="confirm_password" id="confirm_password" class="form-control input-lg" placeholder="Confirm Password"
										  required>
										<p id=err_confirm_password></p>
									</div>
								</div>
							</div>







							<div class="form-group">
								<label class="control-label" for="datebirth">Date of Birth</label>

								<input type="date" name="datebirth" id="datebirth" class="form-control input-lg" required>
								<p id=err_datebirth></p>
							</div>
							<!--Question-->

							<div class="form-group">
								<label class="control-label" for="question">Question 1</label>
								<select class="form-control input-lg" id="question1" name="question1">
									<option>1.What work do you do?</option>
									<option>2.What is your full name?</option>
									<option>3.What is your favourite hobby?</option>
								</select>

								<div class="form-group">
									<label class="control-label" for="answer">Answer 1</label>
									<input type="text" name="answer1" id="answer1" class="form-control input-lg" placeholder="Answer" required>
									<p id=err_answer1></p>
								</div>

							</div>



							<div class="form-group">
								<label class="control-label" for="question">Question 2</label>
								<select class="form-control input-lg" id="question2" name="question2">
									<option>1.What do you like to read?</option>
									<option>2.What seasons do you like?</option>
									<option>3.What country do you like most?</option>
								</select>

								<div class="form-group">
									<label class="control-label" for="answer">Answer 2</label>
									<input type="text" name="answer2" id="answer2" class="form-control input-lg" placeholder="Answer" required>
									<p id=err_answer2></p>
								</div>

							</div>




							<div class="form-group">
								<label class="control-label" for="question">Question 3</label>
								<select class="form-control input-lg" id="question3" name="question3">
									<option>1.How many people are there in your family?</option>
									<option>2.Where do you like to watch movies?</option>
									<option>3.What is the capital of your country?</option>
								</select>

								<div class="form-group">
									<label class="control-label" for="answer">Answer 3</label>
									<input type="text" name="answer3" id="answer3" class="form-control input-lg" placeholder="Answer" required>
									<p id=err_answer3></p>
								</div>

							</div>


							<div class="form-group">
								<label class="control-label" for="ssn/passport">E-mail</label>
								<input type="email" name="email" id="email" class="form-control input-lg" placeholder="E-mail">
								<p id=err_email></p>
							</div>

							<div class="form-group">
								<input type="checkbox" class="form-check-input" id="exampleCheck1" required>
								<label for="terms">By Creating an Account, you Agree
									<a href="terms.php" title="You May Read Our Terms and Conditions by Clicking on This Link"
									  data-toggle="modal" data-target="#myModal">Term of service.</a> for Registration.</label>
								<p id=err_exampleCheck1></p>
							</div>

							<!-- Modal -->
							<div class="modal fade" id="myModal" role="dialog">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Term of service and Privacy Notice</h4>
										</div>
										<div class="modal-body">

											<p>1.Applicants for membership of the website can register only one account per person.
												<br> 2.Website member’s personal detail have to be correctly given otherwise admin will not allow your membership.
												<br> 3.we keep your personal information save other people can’t access to your information.
												<br> 4.Website member must keep username and password save and must no share it with other people.
												<br> 5. Website member will be responsible for any damages incurred as a result of their use of the Site.
												<br> 6.Website Admin can change member website’s role or delete account with out notice that user if that user don’t
												follow this term of service or
												<br> - Members of the website write and publish illegal articles, threatening, threatening, defamatory, abusive,
												vulgar, obscene, profane, defamatory, or otherwise defamatory, or defamatory or defamatory. Or articles that
												incites riots.
												<br> - Members of the site make comments that are threatening, defamatory, libelous, abusive, vulgar, obscene, profane,
												abusive, disrespectful. Or to incite riots.
												<br>

											</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>



							<div class="row">
								<div class="col-xs-3 col-sm-3 col-md-3">
									<span class="button-checkbox">
										<br>
										<button class="btn info" name="btn_reg" id="btn_reg">Register</button>


									</span>
								</div>

							</div>

						</form>

					</div>


				</div>

			</div>

		</div>





	</div>



	<?php include("footer.html")?>

	<!-- Bootstrap core JavaScript -->



	<script type="text/javascript">
		var pattern_name = /[a-zA-Zก-ํ]{1,}$/;
		var pattern_ssn = /(^[A-Z]{2})[0-9]{7}$/;
		var pattern_iden = /^$|^\d{13}$/;
		var pattern_password = /^(?=.*\d)^(?=.*[a-z])^(?=.*[A-Z])[0-9a-zA-Z\-\_]{16,}$/;
		var pattern_username = /[0-9a-zA-Zก-ํ\-\_]{1,}$/;
		var pattern_email = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;



		var email = document.getElementById('email');
		var err_email = document.getElementById('err_email');

		var password = document.getElementById("password");
		var confirm_password = document.getElementById("confirm_password");
		var err_password = document.getElementById("err_password");
		var err_confirm_password = document.getElementById("err_confirm_password");

		var username = document.getElementById("username");
		var err_username = document.getElementById("err_username");

		var firstname = document.getElementById("firstname");
		var err_firstname = document.getElementById("err_firstname");

		var lastname = document.getElementById("lastname");
		var err_lastname = document.getElementById("err_lastname");

		var ssnpassport = document.getElementById("ssnpassport");
		var err_ssnpassport = document.getElementById("err_ssn");

		var datebirth = document.getElementById('datebirth');
		var err_datebirth = document.getElementById('err_datebirth');

		var answer1 = document.getElementById('answer1');
		var err_answer1 = document.getElementById('err_answer1');

		var answer2 = document.getElementById('answer2');
		var err_answer2 = document.getElementById('err_answer2');

		var answer3 = document.getElementById('answer3');
		var err_answer3 = document.getElementById('err_answer3');

		var pic = document.getElementById('pic');
		var err_pic = document.getElementById('err_pic');

		var exampleCheck1 = document.getElementById('exampleCheck1');
		var err_exampleCheck1 = document.getElementById('err_exampleCheck1');








		$('#firstname').blur(function () {

			firstnamecheck();
		})
		$('#lastname').blur(function () {

			lastnamecheck();
		})
		$('#ssnpassport').blur(function () {

			ssncheck();
		})
		$('#username').blur(function () {

			usernamecheck();
		})
		$('#password').blur(function () {

			passwordcheck();
			confirm_passwordcheck();
		})
		$('#confirm_password').blur(function () {

			confirm_passwordcheck();
		})
		$('#email').blur(function () {

			emailcheck();
		})
		$('#datebirth').blur(function () {

			datebirthcheck();
		})

		$('#answer1').blur(function () {

			answer1check();
		})

		$('#answer2').blur(function () {

			answer2check();
		})

		$('#answer3').blur(function () {

			answer3check();
		})

		$('#pic').blur(function () {

			piccheck();
		})


		$('#btn_reg').click(function (event) {

			firstnamecheck();
			lastnamecheck();
			ssncheck();
			usernamecheck();
			passwordcheck();
			confirm_passwordcheck();
			emailcheck();
			datebirthcheck();
			answer1check();
			answer2check();
			answer3check();
			piccheck();
			exampleCheck1_check();
			if (key && keyfname && keylname && keyssn && keyusername && keypassword && keyconpass && keydate && keya1 && keya2 &&
				keya3 && keypic && keyemail && keycheckbox) {
				console.log("Registration!");
				document.getElementById("my_form").submit;



			} else {
				event.preventDefault();
				console.log("Can't Register");

			}

		})

		var key = true;

		var keyfname = true;

		function firstnamecheck() {
			//check pat
			if (firstname.value != "") {
				if (firstname.value.match(pattern_name)) {
					err_firstname.innerHTML = "";
					key = true;
					keyfname = true;
				} else {
					err_firstname.innerHTML = "First name must contain only letters!";
					err_firstname.style.color = "#ff6666";
					key = false;
					keyfname = false;
				}
			}
			//check empty
			else {
				err_firstname.innerHTML = "Please enter your firstname!";
				err_firstname.style.color = "#ff6666";
				key = false;
				keyfname = false;
			}
		}

		var keylname = true;

		function lastnamecheck() {
			//check pat
			if (lastname.value != "") {
				if (lastname.value.match(pattern_name)) {
					err_lastname.innerHTML = "";
					key = true;
					keylname = true;
				} else {
					err_lastname.innerHTML = "Last name must contain only letters!";
					err_lastname.style.color = "#ff6666";
					key = false;
					keylname = false;
				}
			}
			//check empty
			else {
				err_lastname.innerHTML = "Please enter your lastname!";
				err_lastname.style.color = "#ff6666";
				key = false;
				keylname = false;
			}

		}

		var keyssn = true;

		function ssncheck() {
			//check pat //check pat & data
			err_ssn.innerHTML = "";
			if (ssnpassport.value != "") {
				if (ssnpassport.value.match(pattern_ssn) || ssnpassport.value.match(pattern_iden)) {
					$.post('checkdataSsn.php', {
						ssnpassport: ssnpassport.value
					}, function (data) {
						data = $.parseJSON(data);
						if (data.count > 0) {
							err_ssnpassport.innerHTML = data.dataAlert;
							err_ssnpassport.style.color = "#ff6666";
							key = false;
							keyssn = false;
						} else {
							err_ssnpassport.innerHTML = data.dataAlert;
							err_ssnpassport.style.color = "#7cfc00";
							key = true;
							keyssn = true;
						}

					});
				} else {
					err_ssnpassport.innerHTML = "ssn/passport must contain only number and 9-13 number!";
					err_ssnpassport.style.color = "#ff6666";
					key = false;
					kkeyssn = false;
				}
			} else {
				err_ssnpassport.innerHTML = "Please enter your ssn/passport!";
				err_ssnpassport.style.color = "#ff6666";
				key = false;
				keyssn = false;
			}
			//check empty

		}


		var keyusername = true;



		function usernamecheck() {
			//check pat & data
			err_username.innerHTML = "";
			if (username.value != "") {
				if (username.value.match(pattern_username)) {
					$.post('checkdataUsername.php', {
						username: username.value
					}, function (data) {
						data = $.parseJSON(data);
						if (data.count > 0) {
							err_username.innerHTML = data.dataAlert;
							err_username.style.color = "#ff6666";
							key = false;
							keyusername = false;
						} else {
							err_username.innerHTML = data.dataAlert;
							err_username.style.color = "#7cfc00";
							key = true;
							keyusername = true;
						}

					});
				} else {
					err_username.innerHTML = "Username must contain only letters, numbers and underscores!";
					err_username.style.color = "#ff6666";
					key = false;
					keyusername = false;
				}
			}
			//check empty
			else {
				err_username.innerHTML = "Please enter your username!";
				err_username.style.color = "#ff6666";
				key = false;
				keyusername = false;
			}
		}

		var keypassword = true;


		function passwordcheck() {
			//check pat
			if (password.value != "") {
				if (password.value.match(pattern_password)) {
					err_password.innerHTML = "";
					key = true;
					keypassword = true;
				} else {
					err_password.innerHTML =
						"Password Must cContain at Least One Number And One Uppercase And Lowercase Letter And Can Use Speical Charecter (-_), And at Least 16 or More Characters!";
					err_password.style.color = "#ff6666";
					key = false;
					keypassword = false;
				}
			}
			//check empty
			else {
				err_password.innerHTML = "Please enter your password!";
				err_password.style.color = "#ff6666";
				key = false;
				keypassword = false;
			}
		}
		//check match password

		var keyconpass = true;

		function confirm_passwordcheck() {
			if (password.value != "") {
				if (confirm_password.value != "") {
					if (password.value == confirm_password.value) {
						err_confirm_password.innerHTML = "password is matching!!";
						err_confirm_password.style.color = "#7cfc00";
						key = true;
						keyconpass = true;
					} else {
						err_confirm_password.innerHTML = "password is not matching!!";
						err_confirm_password.style.color = "#ff6666";
						key = false;
						keyconpass = false;
					}
				}
			} else {
				err_confirm_password.innerHTML = "Please confirm your password!";
				err_confirm_password.style.color = "#ff6666";
				key = false;
				keyconpass = false;
			}
		}

		var keydate = true;

		function datebirthcheck() {
			//check pat
			if (datebirth.value != "") {
				var dob = datebirth.value;
				var year = Number(dob.substr(0, 4));
				var month = Number(dob.substr(4, 2)) - 1;
				var day = Number(dob.substr(6, 2));
				var today = new Date();
				var age = today.getFullYear() - year;
				if (today.getMonth() < month || (today.getMonth() == month && today.getDate() < day)) {
					age--;
				}

				if (age < 15 || age > 120) {
					err_datebirth.innerHTML = "User contain must between 15-120 years old.";
					err_datebirth.style.color = "#ff6666";
					key = false;
					keydate = false;
				} else {
					err_datebirth.innerHTML = "";
					keydate = true;
				}


			}
			//check empty
			else {
				err_datebirth.innerHTML = "Please enter your date!";
				err_datebirth.style.color = "#ff6666";
				key = false;
				keydate = false;
			}

		}

		var keya1 = true;




		function answer1check() {
			//check pat
			if (answer1.value != "") {
				err_answer1.innerHTML = "";
				key = true;
				keya1 = true;
			}
			//check empty
			else {
				err_answer1.innerHTML = "Please enter your answer1!";
				err_answer1.style.color = "#ff6666";
				key = false;
				keya1 = false;
			}

		}

		var keya2 = true;

		function answer2check() {
			//check pat
			if (answer2.value != "") {
				err_answer2.innerHTML = "";
				key = true;
				keya2 = true;
			}
			//check empty
			else {
				err_answer2.innerHTML = "Please enter your answer2!";
				err_answer2.style.color = "#ff6666";
				key = false;
				keya2 = false;
			}

		}

		var keya3 = true;

		function answer3check() {
			//check pat
			if (answer3.value != "") {
				err_answer3.innerHTML = "";
				key = true;
				keya3 = true;
			}
			//check empty
			else {
				err_answer3.innerHTML = "Please enter your answer3!";
				err_answer3.style.color = "#ff6666";
				key = false;
				keya3 = false;
			}

		}


		var keypic = true;

		function piccheck() {
			//check pat
			if (pic.value != "") {
				err_pic.innerHTML = "";
				keypic = true;
			}
			//check empty
			else {
				err_pic.innerHTML = "Please upload your pic!";
				err_pic.style.color = "#ff6666";
				key = false;
				keypic = false;
			}

		}

		var keyemail = true;


		function emailcheck() {
			//check pat & data  

			if (email.value != "") {
				if (email.value.match(pattern_email)) {
					$.post('checkdataEmail.php', {
						email: email.value
					}, function (data) {
						data = $.parseJSON(data);
						if (data.count > 0) {
							err_email.innerHTML = data.dataAlert;
							err_email.style.color = "#ff6666";
							key = false;
							keyemail = false;
						} else {
							err_email.innerHTML = data.dataAlert;
							err_email.style.color = "#7cfc00";
							key = true;
							keyemail = true;
						}
					});
				} else {
					err_email.innerHTML = "email must be ex. psrinya@gmail.com!";
					err_email.style.color = "#ff6666";
					key = false;
					keyemail = false;
				}
			}

			//check empty
			else {
				err_email.innerHTML = "Please enter your email!";
				err_email.style.color = "#ff6666";
				key = false;
				keyemail = false;
			}

		}

		var keycheckbox = true;

		function exampleCheck1_check() {
			//check pat

			if (document.getElementById('exampleCheck1').checked) {
				err_exampleCheck1.innerHTML = "";
				key = true;
				keycheckbox = true;
			}
			//check empty
			else {
				err_exampleCheck1.innerHTML = "Please AgreeTerm of service. for Registration. ";
				err_exampleCheck1.style.color = "#ff6666";
				key = false;
				keycheckbox = false;
			}

		}
	</script>

</body>


</html>