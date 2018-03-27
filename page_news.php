
<?php
  session_start();
  require('connect.php');
  $c_id = $_GET['id'];
  $sql = "SELECT * FROM news WHERE id = $c_id";
  $result = ($conn->query($sql))->fetch();
	
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

  <head >
	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
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
			<h1 class="mt-4 "><?php
          echo $result["title"];
        ?></h1>

          <!-- Author -->
			<p class="lead">
            By
            <a href="#">Admin Parinya</a>
          </p>
			
          <hr>

          <!-- Date/Time -->
          <p><?php
          echo $result["date"];
        ?></p>

          <hr>

		  
          <!-- Preview Image -->
          <div class="text-center">
		  
		  
		  
		  
		  
			</div>

          <hr>

          <!-- Post Content -->
         		 <p class="lead"><?php
          echo $result["detail"];
        ?>
		
          <hr>
			</div>			
		</div>			
	 </div>			
	</div>	
	<div class="container">           
  <ul class="pager">
  
	 <?php if($previous!=null){echo "<li class=\"previous\"><a href=\"page_news.php?id=".$previous['id']."\" id=\"Previousbtm\" >Previous</a></li>";}else{}?>
   <?php if($next!=null){echo "<li class=\"next\"><a href=\"page_news.php?id=".$next['id']."\" id=\"Nextbtm\" >next</a></li>";}else{}?> 
		
    
		
  </ul>
</div>
          <!-- Comments Form -->
<!--
          <div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <textarea class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
-->
		  
          <!-- Single Comment -->
<!-- 
          <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
              <h5 class="mt-0">Commenter Name</h5>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            </div>
          </div>
-->
          <!-- Comment with nested comments -->
<!--
          <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
              <h5 class="mt-0">Commenter Name</h5>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

              <div class="media mt-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                  <h5 class="mt-0">Commenter Name</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
              </div>

              <div class="media mt-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                  <h5 class="mt-0">Commenter Name</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
              </div>

            </div>
          </div>

        </div>
-->
 

    <!-- Footer -->
 	<?php include("footer.html")?>

    <!-- Bootstrap core JavaScript -->
 

  </body>

</html>
