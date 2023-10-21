<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>TMFlix-Home</title>
        <link rel="shortcut icon" href ="images/ShortcutIcon.png"> 
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" type="text/css"href="https://fonts.gstatic.com">
        <link rel="stylesheet" type="text/css"href="css/tmflixstylesheet.css">
        <link rel="stylesheet" type="text/css"href="css/mainstylesheet.css">
        <link rel="stylesheet" type="text/css" href="css/lightslider.css">
        <link rel="stylesheet" type="text/css"href="css/stylegenre.css">
        <link rel="stylesheet" type="text/css"href="css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,800;0,900;1,700&display=swap" rel="stylesheet">
        <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css//accountstylesheet.css">

        </head>
    <!-- Start the session--> 
    <?php session_start();?>
        
    <body>
    

<!-- Showcase -->
        <div class="showcase">
        
<!-- Sidebar Navigation Menu -->
    <nav>
        <a href="#" onclick="openNav()" >
            <div class="menu-icon"></div>
            <div class="menu-icon"></div>
            <div class="menu-icon"></div><br><br>
        </a>       
    </nav>
   
    
    <div id="mySidenav" class="sidenav">
        <a href="" class="closebtn" onclick="closeNav()">&times;</a>
        <?php if(date("Y-m-d") < $_SESSION["enddate"]){?> <a style="color:#cf6627;font-weight: bold;">Actived member</a>
        <a href="Home.php"></i> Home</a>
        <a href="Account.php"></i> Account</a>
        <a href="#" onclick="showCategories()" class="dropdown dropbtn"> Genre</a>
            <div id="categories" class="dropdown-content">
                <a href="category.php?category=Action">Action</a>
                <a href="category.php?category=Fantasy">Fantasy</a>
                <a href="category.php?category=Sci-Fi">Sci-fi</a>
                <a href="category.php?category=Horror">Horror</a>
                <a href="category.php?category=Mystery">Mystery</a>
                <a href="category.php?category=Documentary">Documentary</a>
            </div>
        <a style="color:#cf6627;font-weight: bold;" href="" tite="Logout">Logout
    </div>   
     
 
    <!-- End of Sidebar Navigation Menu -->

    <!-- Navbar Navigation Menu -->
    
            <form class="search" action="search.php" method="post">
            <div class="input-icons">
            <i class="fa fa-search icon"></i>
                <input  class="input-field"type="text" name="valueToSearch" placeholder="Search by actors">
            </div>
             <a style="color:#cf6627;font-weight:bold;">Hello,<?php echo $_SESSION["Username"]; ?></a>
            <input type="hidden" type="submit" name="search" value="Search">
            </form>
            <div>
                <img style="display: block;
                margin-left: 40%;
                margin-right: auto;
                width: 20%;"  src="images/TMFLIX nav Logo.png">
            </div> 
            </div>  
    <!--end of navigation bar -->
    
        <script src="js/main.js"></script>
        <script src="js/imageLoad.js"></script>
        <?php } else{?> 
        <?php?>
        <a style="color:#cf6627;font-weight: bold;">Member has expired</a>
        <?php }?>
        
        </body>
        
        </html>
        