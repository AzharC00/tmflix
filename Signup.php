<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Welcome</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="images/ShortcutIcon.png">
        <link rel="stylesheet" href="css/signupstylesheet.css">
    </head>
	
    <body>

        <div class="split left">
            <div class = "centered">
                <img src = "images/TMFLIX Logo.png" alt="Shop Logo">
            </div>
        </div>

        <div class="split right">
            <div class="centered">

                <div class="wrapper">
                    <div class="title-text">
                        
                        <div class ="title signup"> Create Account </div>
                    </div>
                   
                    <div class ="form-container">
                        <div class="slide-controls">
                            <input type="radio" name="slide" id="login" >
							 <input type="radio" name="slide" id="signup"checked>
							 <label  onclick="location.href='Login.php'"for="login" class="slide login">Login</label>
							 <label  for="signup" class="slide signup">Signup</label>
                         <div class="slide-tab"></div>
                       </div>
                    <div class="form-inner">
                            <form method="POST" action="cutomersignup.php" class="signup"" >
                                <div class="field">
                                    <input type="text" id="Username" name="Username" placeholder="User Name">
                                </div>
                                <div class="field">
                                    <input type="text"id="Mobile" name="Mobile" placeholder="Mobile Number">
                                </div>
                                <div class="field">
                                    <input type="text" id="Email" name="Email" placeholder="Email Address" >
                                </div>
                                <div class="field"> <!--The Password will be use with password_hash() for encryption -->
                                    <input type="password"id="Password" name="Password" placeholder="Password">
                                </div><br>
                                <div class="field">
                                    <input id="log"type="submit"name"save" value="Sign Up">
                                </div><br>
                                <div class="login-link"> Already registered ? <a style="text-decoration:none" href="Login.php"> Log In Now</a></div>
                            </form>
                   </div>
                  </div>
              </div>
          </div>
        </div>
    </body>
</html>
