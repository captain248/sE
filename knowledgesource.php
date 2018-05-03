<?php 
session_start();
require('connect.php');
  $sql = "SELECT * FROM source ORDER BY sourceid DESC ";
  $result = ($conn->query($sql))->fetchAll();

  

  if(isset($_GET['type'])){
    $type = $_GET['type'];
  }
  
?>
<html lang="en">

  <head >
	
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

  <body>
	<!--tapmenu and banner-->
    <?php include("header.php")?>
  
   
    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-12">
			<div class="jumbotron">
          <!-- Title -->
			

  <div class="row">
    <center>
      <div class="col-sm-3 col-md-1 col-lg-1"></div>
    </center>

    
   

<?php

if(isset($_GET['type'])&&$type==1){
  echo "<h2>สาระน่ารู้</h2>";
}
elseif(isset($_GET['type'])&&$type==2){
  echo "<h2>HOW to</h2>";
}
elseif(isset($_GET['type'])&&$type==3){
  echo "<h2>Home review</h2>";
}
else{
  echo "<h2>knowledgesource</h2>";
}

foreach ($result as $source) {
  $typedata=$source["typesource"];
if(isset($_GET['type'])){
  
  if($type==1 && $typedata==1){
        
         
          $string = $source['title'];
          if(strlen($string) > 150){
             $stringCut = substr($string, 0, 150);
             $string = $stringCut.'...';
          } 
            $string = iconv("UTF-8", "UTF-8//IGNORE", $string);
            echo "<li><a href=\"sara.php?id=".$source['sourceid']."\"  id=\"reads\" class=\"font-color4\">". $string."</a></li>";
        
    }      
    else if($type==2&&$typedata==2){
      
        $string = $source['title'];
        if(strlen($string) > 150){
           $stringCut = substr($string, 0, 150);
           $string = $stringCut.'...';
        } 
          $string = iconv("UTF-8", "UTF-8//IGNORE", $string);
          echo "<li><a href=\"sara.php?id=".$source['sourceid']."\"  id=\"reads\" class=\"font-color4\">". $string."</a></li>";
      
     }      
    else if($type==3&&$typedata==3){
    
      $string = $source['title'];
      if(strlen($string) > 150){
         $stringCut = substr($string, 0, 150);
         $string = $stringCut.'...';
      } 
        $string = iconv("UTF-8", "UTF-8//IGNORE", $string);
        echo "<li><a href=\"sara.php?id=".$source['sourceid']."\"  id=\"reads\" class=\"font-color4\">". $string."</a></li>";
    
  }   
  else{

  }     
}
else{
      
        $string = $source['title'];
        if(strlen($string) > 150){
           $stringCut = substr($string, 0, 150);
           $string = $stringCut.'...';
        } 
          $string = iconv("UTF-8", "UTF-8//IGNORE", $string);
          echo "<li><a href=\"sara.php?id=".$source['sourceid']."\"  id=\"reads\" class=\"font-color4\">". $string."</a></li>";
      
}
}
?>


    </div>
    <center>
      <div class="col-sm-3 col-md-1 col-lg-1"></div>
    </center>
  


		  
       
        

          <!-- Post Content -->

          <hr>
			</div>			
		</div>			
	 </div>			
	</div>	
	

 

    <!-- Footer -->
 	<?php include("footer.html")?>

    <!-- Bootstrap core JavaScript -->


  </body>

</html>
