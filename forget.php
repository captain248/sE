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
require('connect.php');
$username = $_GET["id"];


$sql = "SELECT * FROM users WHERE userName = '$username' ";
$result = ($conn->query($sql))->fetch();


//q1
if($result["qNO1"]==1){
  $question1 = "1.What work do you do?";
}
else if ($result["qNO1"]==2){
  $question1 = "2.What is your full name?";
}
else{
  $question1 = "3.What is your favourite hobby?";
}

//q2
if($result["qNO1"]==1){
  $question2 = "1.What do you like to read?";
}
else if ($result["qNO1"]==2){
  $question2 = "2.What seasons do you like?";
}
else{
  $question2 = "3.What country do you like most?";
}

//q3
if($result["qNO1"]==1){
  $question3 = "1.How many people are there in your family?";
}
else if ($result["qNO1"]==2){
  $question3 = "2.Where do you like to watch movies?";
}
else{
  $question3 = "3.What is the capital of your country?";
}
?>





  <body>
    <!--tapmenu and banner-->
    <?php include("header.php")?>


    <!-- Page Content -->


    <div class="container">
      <div class="row">
        <div class="col-sm-2 col-md-2 col-xs-2 col-lg-2 col-lg-2"></div>
        <div class="jumbotron col-xs-8 col-sm-8 col-md-8 col-lg-8">




          <div class="row2">
            <div class="col-sm-1 col-md-1 col-xs-1 col-lg-1"></div>
            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">

              <form role="form" id="form" name="form" method="post" <?php echo "action=\"reset.php?id=".$username." \"  "; ?> >


                <h2>FORGET?</h2>

                <p id=aleart align='center'></p>


                <!--Question-->

                <div class="form-group">

                  <label class="control-label" for="question">Question 1</label>
                  <select class="form-control input-lg" id="question1" name="question1">
                    <option>
                      <?php   echo ($question1); ?> </option>
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
                    <option>
                      <?php   echo ($question2); ?>
                    </option>
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
                    <option>
                      <?php   echo ($question3); ?>
                    </option>
                  </select>

                  <div class="form-group">
                    <label class="control-label" for="answer">Answer 3</label>
                    <input type="text" name="answer3" id="answer3" class="form-control input-lg" placeholder="Answer" required>
                    <p id=err_answer3></p>
                  </div>

                </div>

                <div class="row">
                  <div class="col-xs-3 col-sm-3 col-md-3">
                    <span class="button-checkbox">
                      <br>
                      <button class="btn info" name="enter" id="enter">submit</button>


                    </span>
                  </div>

                </div>

            </div>

          </div>
        </div>
      </div>




      </form>

    </div>


    </div>

    </div>

    </div>




    <!-- Footer -->
    <?php include("footer.html")?>

    <!-- Bootstrap core JavaScript -->


  </body>



  <script>
    var aleart = document.getElementById('aleart');

    var key = true;
  var result1 = "<?php echo $result["question1"]; ?>";
  var result2 = "<?php echo $result["question2"]; ?>";
  var result3 = "<?php echo $result["question3"]; ?>";
  var point ="<?php echo $result["userPoint"]; ?>";
  var username ="<?php echo $result["userName"]; ?>";

    console.log(result1);


    //as1
    function ascheck() {
      if (answer1.value != "") {
        if (answer1.value == result1 && answer2.value == result2 && answer3.value == result3) {
          aleart.innerHTML = "";
          key = true;
          console.log("T1");
        } else {
          aleart.innerHTML = "Wrong Answer ";
          aleart.style.color = "#ff6666";
          key = false;
          console.log("F1");
        }
      }


      //check empty
      else {
        aleart.innerHTML = "Wrong Answer";
        aleart.style.color = "#ff6666";
        key = false;
      }
    }

    //button
    $('#enter').click(function (event) {
      ascheck()

      if (key) {
        console.log("true!");
        document.getElementById("form").submit;



      } else {
        event.preventDefault();
        console.log("false!");
        
       /* $.post('updateuserpoint.php?id=<?php ".$username." ?>', { point: point.value}, function(data) {
			  data = $.parseJSON(data);
				if(data.count > 0){
				aleart.innerHTML = data.dataAlert  ;
				aleart.style.color = "#ff6666" ;
				
			}


      
			});	
      */
    }
    })
  </script>




</html>