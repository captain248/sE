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

<link href="css/blog-post.css" rel="stylesheet">

<a href="#" id="login" style="color:white;" data-toggle="modal" data-target="#login-modal">
  <span class="glyphicon glyphicon-log-in"></span> Sign in</a>
<br>

<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;"
  align="center" valign="top">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">×</span>
          <span class="sr-only">Close</span>
        </button>
        <h3 class="modal-title" id="lineModalLabel">LOGIN</h3>
      </div>
      <div class="modal-body">

        <!-- content goes here -->
        <form>
          <div class="form-group">
            <p id=text_login></p>
            <p id=text_forget></p>
            <label>Username</label>
            <input type="text" class="form-control input-lg" id="usernamelogin" placeholder="Username" name="usernamelogin">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control input-lg" id="passwordlogin" placeholder="password" name="passwordlogin">
          </div>
          <div class="form-group">





            
            
            
            <a href="forget.php" id="forget" method="post" > Forgot your Password</a>
            
            
            
            
            


            <br>
          </div>
          <div class="form-group">
            <script>
              function submit() {

                document.getElementById("submit").disabled = false;
              }
            </script>

            <div class="g-recaptcha" data-callback="submit" data-sitekey="6Ld2DkoUAAAAAM48tBd1gtIen7jWQoGYZXn0zvgC"></div>
            <script src='//www.google.com/recaptcha/api.js'></script>


          </div>

          <!--          <div class="checkbox">
                <label>
                  <input type="checkbox"> Check me out
                </label>
              </div>
-->

          <button class="btn info" id="submit" disabled>Submit</button>

        </form>
      </div>
      <div class="modal-footer">





      </div>
    </div>
  </div>
</div>
<script>
  var text_login = document.getElementById("text_login");


  $("#submit").on("click", function (g) {

    var username = $('#usernamelogin').val();
    var password = $('#passwordlogin').val();
    g.preventDefault();

    $.ajax({
      url: 'checklogin.php',
      data: {
        username: username,
        password: password
      },
      type: 'POST',
      success: function (value) {
        value = $.parseJSON(value);
        if (value.check == "notpass") {
          if (username == "" || password == "") {
            text_login.innerHTML = "Username & Password Incorrect";
            text_login.style.color = "#ff6666";
          } else {
            text_login.innerHTML = value.dataAlert;
            text_login.style.color = "#ff6666";
          }


          //ChangeCaptcha();


          //ChangeCaptcha();

        } else {
          window.location.href = "index.php";
        }
      }
    });
    console.log("2");
  })



var text_forget = document.getElementById("text_forget");
var usernamelogin = document.getElementById("usernamelogin");

$("#forget").on("click", function (go) {
  console.log("2");
  var username = $('#usernamelogin').val();
 
  go.preventDefault();

  $.ajax({
    url: 'checkforget.php',
    data: {
      username: username
    },
    type: 'POST',
    success: function (value) {
      value = $.parseJSON(value);
      if (value.check == "notpass") {

        
        if (username == "" ) {
          text_login.innerHTML = "Username & Password Incorrect";
          text_login.style.color = "#ff6666";
        } else {
          text_login.innerHTML = value.dataAlert;
          text_login.style.color = "#ff6666";
        }


       

      } else {
        window.location.href = "forget.php?id="+usernamelogin.value;
      }
    }
  });
  
})






</script>