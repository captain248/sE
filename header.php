


<table background="pic/banner.png" height=40% width=100% style="background-repeat: no-repeat;background-size: 100% 100%, auto;">
      <tr>
        <td align="right" valign="top">
          <?php 
				if ($_SESSION == null) {
          include("login.php");
          //echo "<a href=\"#\" style=\"color:white;\" data-toggle=\"modal\" data-target=\"#login-modal\">22</a>";
					echo "<a href=\"Registerform.php\" style=\"color:white;\" id=\"reg\"><span class=\"glyphicon glyphicon-user\"></span> Register</a>"	;
					
				}
		    else if($_SESSION["status"]=='admin'){
          echo "<p style=\"color:white;\">สวัสดี  <a href=\"#\" id=\"profile\" style=\"color:blue;\">".$_SESSION['userName']."</a><br>";
					echo "<a href=\"logout.php\" style=\"color:white;\" class=\"glyphicon glyphicon-log-out\">Logout </a>";
        }
        else{
          echo "<p style=\"color:white;\">สวัสดี  <a href=\"personal_information.php\" id=\"profile\" style=\"color:blue;\">".$_SESSION['userName']."</a><br>";
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
          <li class="active dropdown">
            <a class="dropbtn" href="knowledgesource.php" id="knowledge source">knowledge source</a>
            <div class="dropdown-content">
              <a href="knowledgesource.php?type=1" id="sara">สาระน่ารู้</a>
              <a href="knowledgesource.php?type=2" id="howto">How to</a>
              <a href="knowledgesource.php?type=3" id="homereview">Home review</a>
            </div>
          </li>
        </ul>
        

<?php  
    if ($_SESSION == null) {
      echo"
      <ul class=\"nav navbar-nav\">
          <li class=\"active\">
            <a href=\"index.php\" id=\"event\">Event</a>
          </li>
        </ul>

        <ul class=\"nav navbar-nav\">
          <li class=\"active\">
            <a href=\"index.php\" id=\"about\">About Us</a>
          </li>
        </ul>
      ";


    }
    else if($_SESSION["status"]=='admin'){
      echo"
      <ul class=\"nav navbar-nav\">
      <li class=\"active\">
        <a href=\"manage.php\" id=\"manage\">Manage User</a>
      </li>
    </ul>
    ";
    }

    else{
      echo"
      <ul class=\"nav navbar-nav\">
          <li class=\"active\">
            <a href=\"index.php\" id=\"event\">Event</a>
          </li>
        </ul>

        <ul class=\"nav navbar-nav\">
          <li class=\"active\">
            <a href=\"index.php\" id=\"about\">About Us</a>
          </li>
        </ul>
      ";
    }




?>

      </div>
    </nav>
