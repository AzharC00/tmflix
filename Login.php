
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Welcome</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="images/ShortcutIcon.png">
        <link rel="stylesheet" href="css/loginstylesheet.css">
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
                        <div class ="title login"> Welcome Back!</div>
                    </div>
               
                    <div class ="form-container">
                        <div class="slide-controls">
                            <input type="radio" name="slide" id="login"checked>
							 <input type="radio" name="slide" id="signup">
							 <label  for="login" class="slide login">Sign In</label>
							 <label onclick="location.href='Signup.php'" for="signup" class="slide signup">Signup</label>
                            <div class="slide-tab"></div>
                        </div>
                     <div class="form-inner">
                            <form action="customerslogin.php"  class="login" method="POST">
                                <div class="field">
                                    <input type="text" name ="Email" id="Email"placeholder="Email Address" >
                                </div>
                                <div class="field"> <!-- This password will be verified by using the password_verify()-->
                                    <input type="password" name = "Password" id="Password" placeholder="Password">
                        
                            <span></span>
								
                                </div><br><br><br>
                               
                               
                                <div class="field">
                                    <input name="save" type="submit" value="Sign In">
                                </div>
                            
								<div class="signup-link"> Not yet a member ? <a style="text-decoration:none" href="Signup.php">   Sign Up Here</a></div>
							</form>
                     </div>
                    </div>
             </div>
           </div>
       </div>
    </body>
</html>