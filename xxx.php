<!-- Navigation -->
<?php session_start(); ?>
<table background="pic/banner.png" height=40% width=100% style="background-repeat: no-repeat;background-size: 100% 100%, auto;">
	<tr >
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
      <li class="active"><a href="index.php" id="knowledge source</a></li>
    </ul>">knowledge source</a></li>
    </ul>
	 <ul class="nav navbar-nav">
      <li class="active"><a href="index.php" id="event">Event</a></li>
    </ul>
	 <ul class="nav navbar-nav">
      <li class="active"><a href="index.php" id="about">About Us</a></li>
    </ul>
	
	
  
  </div>
</nav>