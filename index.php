<?php
session_start();
  require('connect.php');
  $sql = "SELECT * FROM news ORDER BY id DESC LIMIT 10";
  $result = $conn->query($sql);
  $get_result = ($conn->query($sql))->fetchAll();
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
    <title>SWEET-HOME</title>
    <link rel="icon" type="image/x-icon" href="image/logo.ico" />
    <!-- Custom styles for this template -->
    <link href="css/blog-post.css" rel="stylesheet">

  </head>

  <body>
    <!--tapmenu and banner-->
    <table background="pic/banner.png" height=40% width=100% style="background-repeat: no-repeat;background-size: 100% 100%, auto;">
      <tr>
        <td align="right" valign="top">
          <?php 
				if ($_SESSION == null) {
          include("login.php");
          //echo "<a href=\"#\" style=\"color:white;\" data-toggle=\"modal\" data-target=\"#login-modal\">22</a>";
					echo "<a href=\"Registerform.php\" style=\"color:white;\" id=\"reg\"><span class=\"glyphicon glyphicon-user\"></span> Register</a>"	;
					
						}
		else{
					echo "<p style=\"color:white;\">HELLO คุณ <a href=\"personal_information.php\" style=\"color:blue;\">".$_SESSION['fname']."</a><br>";
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
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <?php
              $i = 0;
              if($result->rowCount() == 0){
                echo "<li data-target=\"#myCarousel\" data-slide-to=\"0\"></li>";
              }
              while($i < 5 &&  $i < $result->rowCount()){
                if($i == 0)
                  echo "<li data-target=\"#myCarousel\" data-slide-to=\"".$i."\" class=\"active\"></li>";
                else
                  echo "<li data-target=\"#myCarousel\" data-slide-to=\"".$i."\"></li>";
                $i = $i + 1;
              }
          ?>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">

          <?php
            $num = $result->rowCount() >= 5? 5:$result->rowCount();
            
            for ($i = 0; $i < $num; $i++){
              $sql_img = "SELECT name FROM pic WHERE id_news=".$get_result[$i]['id']." AND slidepic = 1";
              $img_result = ($conn->query($sql_img)->fetch());
              $active = "";
              if($i == 0){
                $active = "active";
              }
              echo 
              "<div class=\"item ". $active. " \" >".
				"<a href=\"page_news.php?id=".$get_result[$i]['id']."\" target=\"_blank\" id=\"picnews\" >".
				
                "<img src=\"image/".$img_result['name']. "\"></a>".
				
                "<div class=\"container\">".
                "<div class=\"carousel-caption\">".
                  
                    "<h1>".$get_result[$i]['title'].
                    "</h1>
                    
                  </div>
                </div>
              </div>";  
            }
          ?>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev" id="Previous">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next" id="Next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>





    <div class="container">
      <div style="max-width: 100%; margin: 0px auto;" class="alert" role="alert">
        <div class="col-sm-5 ">
          <h2>NEWS & ANNOUNCEMENTS</h2>
          <ul class="get-data">

            <?php
              foreach ($result as $news) {
                $string = $news['title'];
                if(strlen($string) > 150){
                  $stringCut = substr($string, 0, 150);
                  $string = $stringCut.'...';
                }
                 $timestamp = strtotime($news['date']);
                 
                $string = iconv("UTF-8", "UTF-8//IGNORE", $string);
                echo "<li><a href=\"page_news.php?id=".$news['id']."\" target=\"_blank\" id=\"reads\" class=\"font-color4\">". $string."</a></li>";
              }
            ?>

          </ul>
          <div class="load_more font-Tri" id="more" data-id=<?php echo end($get_result)[ 'id'];?>> more...</div>
        </div>
      </div>
    </div>






    <script>
      $(function () {
        $("body").on('click', '.load_more', function () {
          var lastid = $(this).attr('data-id');
          var current = $(this);
          console.log(lastid);

          $.post("page.php", {
            lastId: lastid
          }, function (data) {
            current.closest("li").remove();
            $(".get-data").append(data);
            str = data.split("<li>");
            console.log(data);
            if (str[str.length - 1] > 1) {
              $('.load_more').attr('data-id', parseInt(str[str.length - 1]));
            } else {
              $('.load_more').remove();
            }
          });
        });
      });
    </script>

    <!-- Footer -->

    <?php include("footer.html")?>
    


  </body>

  </html>