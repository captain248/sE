<?php session_start(); ?>

<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>SWEET-HOME-NEWS</title>
  <link rel="icon" type="image/x-icon" href="pic/logo.ico" />
  <!-- Custom styles for this template -->
  <link href="css/blog-post.css" rel="stylesheet">

</head>
<?php

$username = $_GET["id"];

?>




<body>
  <!--tapmenu and banner-->
  <?php include("header.php")?>


  <!-- Page Content -->


  <div class="container">
    <div class="row">
      <div class="col-sm-2 col-md-2 col-xs-2 col-lg-2 col-lg-2"></div>
      <div class="jumbotron col-xs-8 col-sm-8 col-md-8 col-lg-8">
      <p id=aleart align = 'center'></p>



        <div class="row2">
          <div class="col-sm-1 col-md-1 col-xs-1 col-lg-1"></div>
          <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">

            <form role="form" id="form" name="form" method="post"<?php  echo "action=\"reseting.php?id=".$username."\""; ?>>
              <h2>RESET?</h2>
              


<div class="col-xs-12 col-sm-12 col-md-12"><p id=aleart1></p></div>
              <div class="form-group ">
              
                <div class="col-xs-2 col-sm-2 col-md-2">
                  New Password
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10">
                  <input type="password" id="newpassword" name="newpassword" class="form-control ">
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12"><p id=aleart2></p></div>
              <div class="form-group ">
              
                <div class="col-xs-2 col-sm-2 col-md-2">
                  confirm Password
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10">
                  <input type="password" id="confirmPassword" name="confirmPassword" class="form-control ">
                </div>
              </div>
              <div class="row">
                  <div class="col-xs-3 col-sm-3 col-md-3">
                    <span class="button-checkbox">
                      <br>

                      <button class="btn info" name="btn_reg" id="btn_reg">reset password</button>



                    </span>
                  </div>

                </div>







            </form>


          </div>

        </div>
      </div>
    </div>

  </div>







  <!-- Footer -->
  <?php include("footer.html")?>

  <!-- Bootstrap core JavaScript -->


</body>
<script>



	var pattern_password = /^(?=.*\d)^(?=.*[a-z])^(?=.*[A-Z])[0-9a-zA-Z\-\_]{16,}$/;

	var password = document.getElementById("newpassword");
	var confirm_password = document.getElementById("confirmPassword");
  var aleart1 = document.getElementById("aleart1");
  var aleart2 = document.getElementById("aleart2");
var keypassword= false;


 function passwordcheck(){ 
//check pat
	if(password.value != "") {
		if(password.value.match(pattern_password)){
			aleart1.innerHTML = "";
			keypassword= true;
		}
		else{
			aleart1.innerHTML = "Password Must Contain at Least One Number And One Uppercase And Lowercase Letter And Can Use Speical Charecter (-_), And at Least 16 or More Characters!";
	    aleart1.style.color = "#ff6666" ;
			
			keypassword= false;
		}	
  }
	//check empty
	else{
      aleart1.innerHTML = "Please enter your password!";
      aleart1.style.color = "#ff6666" ;
		  
		  keypassword= false;
	}
 }	
//check match password
var keyconpass= false;
 
function confirm_passwordcheck(){ 
	if(password.value != "") {
		if (confirm_password.value != ""){
			if(password.value == confirm_password.value){
				aleart2.innerHTML = "password is matching!!";
				aleart2.style.color = "#7cfc00" ;
				keyconpass= true;
			}
			else{
				aleart2.innerHTML = "password is not matching!!";
				aleart2.style.color = "#ff6666" ;
				keyconpass= false;
			}
		}
    else{
    aleart2.innerHTML = "Please confirm your password!";
    aleart2.style.color = "#ff6666" ;   
		keyconpass= false;
	  }
	}
	
}



$('#btn_reg').click(function(event){
	 
	 passwordcheck();	
	 confirm_passwordcheck();
	 
 if(keypassword&&keyconpass){ 
		console.log("t");
		document.getElementById("form").submit;
		
		
		
	}else{
		event.preventDefault();
		 console.log("F");
		 
	}	
	
 })



</script>




</html>