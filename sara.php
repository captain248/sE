<?php
  session_start();
  require('connect.php');

  $c_id = $_GET['id'];

  $sql = "SELECT * FROM source WHERE sourceid = $c_id";
  $result = ($conn->query($sql))->fetch();
  
  
//getcomment
  $sql = "SELECT * FROM comment WHERE sourceid = $c_id ORDER BY commentid " ;
  $resultcomment = ($conn->query($sql))->fetchAll();
  


  //get previous
  $sql = "SELECT * FROM news WHERE id = (SELECT max(id) FROM news WHERE id < $c_id)";
  $previous = ($conn->query($sql))->fetch();

  //get next
  $sql = "SELECT * FROM news WHERE id = (SELECT min(id) FROM news WHERE id > $c_id)";
  $next = ($conn->query($sql))->fetch();
  
  
  //pic
  $sql = "SELECT * FROM pic WHERE id_news = $c_id";
  $result2 = ($conn->query($sql))->fetch();
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
    <title>SWEET-HOME-NEWS</title>
    <link rel="icon" type="image/x-icon" href="image/logo.ico" />
    <!-- Custom styles for this template -->
    <link href="css/blog-post.css" rel="stylesheet">

  </head>

  <body>
    <!--tapmenu and banner-->
    <?php include("header.php") ?>


    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-12">
          <div class="jumbotron">
            <!-- Title -->
            <h1 class="mt-4 ">
              <?php
          echo $result["title"];
        ?>
            </h1>

            <!-- Author -->
            <p class="lead">
              By
              <a href="#">Admin Parinya</a>
            </p>

            <hr>

            <!-- Date/Time -->
            <p>
              <?php
          echo $result["date"];
        ?>
            </p>

            <hr>


            <!-- Preview Image -->
            <div class="text-center">




            </div>

            <hr>

            <!-- Post Content -->
            <p class="lead">
              <?php
          echo $result["detail"];
        ?>

                <hr>
          </div>
        </div>
      </div>
    </div>

    <!-- Comments Form -->
 <?php   if ($_SESSION != null) { 
  echo "  <div class='container'>
      <div class='row'>
        <div class='col-lg-12'>
          <div class='jumbotron'>


            <div class='card my-4'>
              <h5 class='card-header'>Leave a Comment:</h5>
              <div class='card-body'>
                <form id='addcomment'>
                  <div class='form-group'>
                  <p id=aleartcomment></p>
                    <textarea class='form-control' rows='3' id='detail' name='detail' maxlength='250'></textarea>
                    <input type='hidden' id='ids' name='ids' class='form-control ' value='".$c_id."' disabled>
                    <input type='hidden' id='username' name='username' class='form-control ' value='".$_SESSION['userName']."' disabled>
                  </div>
                  <button type='button' class='btn btn-primary' id='submit' name='submit'>Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    ";
 }
?>


    <!-- Single Comment -->


    <div id=commentdiv>
      <?php
              foreach ($resultcomment as $comment) {
                  echo 
                  
                  
  "
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-1 col-md-1 col-xs-1 col-lg-1\"></div>
        <div class=\"col-sm-10 col-md-10 col-xs-10 col-lg-10\">
          <div class=\"jumbotron\">

          <div class=\"media mb-4\">
            <div> ".$comment["detailcomment"]."</div>


            <div class=\"media-body\">
              
                
                <br> 
                <div class=\"col-sm-6 col-md-6 col-xs-6 col-lg-6\"> 
                  ".$comment["username"]." is Comment.
                </div>
                <div class=\"col-sm-6 col-md-6 col-xs-6 col-lg-6\">TIME : ".$comment["datecomment"]."</div>
            </div>      
          </div>
        </div>
      </div>
      <div class=\"col-sm-1 col-md-1 col-xs-1 col-lg-1\"></div>
    </div>
  </div>"
                
               ;
              }
               
            ?>

    </div>










    <div class="container">
      <ul class="pager">

        <?php if($previous!=null){echo "<li class=\"previous\"><a href=\"sara.php?id=".$previous['id']."\" id=\"Previousbtm\" >Previous</a></li>";}else{}?>
        <?php if($next!=null){echo "<li class=\"next\"><a href=\"sara.php?id=".$next['id']."\" id=\"Nextbtm\" >next</a></li>";}else{}?>



      </ul>
    </div>



    <!-- Footer -->
    <?php include("footer.html")?>

    <!-- Bootstrap core JavaScript -->
    <script>
var key= false;
var comment = document.getElementById("detail");
var aleartcomment = document.getElementById("aleartcomment");
function emptycommentcheck(){ 
//check comment
	if(comment.value != "") {

    if(comment.value.length >=251 ) {
      aleartcomment.innerHTML = "your comment must less 250 character";
	    aleartcomment.style.color = "#ff6666" ;
		  key = false;
    }
    else{
	    key=true;
      aleartcomment.innerHTML = "";
    }
  }
	else{
		aleartcomment.innerHTML = "Please enter your comment before enter!";
	  aleartcomment.style.color = "#ff6666" ;
		key = false;
	}
}	


      $("#submit").on("click", function (g) {
        emptycommentcheck();
        var detail = $('#detail').val();
        var ids = $('#ids').val();
        var username = $('#username').val();
     
        console.log(detail);
        console.log(ids);
        console.log(username);
        g.preventDefault();
      if(key){
        $.post('addcomment.php', {
          detail: detail,
          ids: ids,
          username: username
        }, function (data) {
         
          
          var result = "";
          result += "<div class='container'>";
          result += "<div class='row'>";
          result += "<div class='col-sm-1 col-md-1 col-xs-1 col-lg-1'>";
          result += "</div>";
          result += " <div class='col-sm-10 col-md-10 col-xs-10 col-lg-10'>";
          result += "<div class='jumbotron'>";
          result += "<div class='media mb-4'>";
          result += detail;
          result += "<div class='media - body'>";
          result += "<br> ";
          result += "<div class='col-sm-6 col-md-6 col-xs-6 col-lg-6'>";
          result += username;
          result += " is Comment.</div>";
          result += "<div class='col-sm-6 col-md-6 col-xs-6 col-lg-6'>TIME : " + data;
          result += "</div>";
          result += "</div>";
          result += "</div>";
          result += "</div>";
          result += "</div>";
          result += "</div>";
          result += "</div>";
          $("#commentdiv").append(result);
          $('#detail').val('');
        });
        }
      })

    </script>

  </body>

  </html>