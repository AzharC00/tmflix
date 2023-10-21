<?php include("header.php");
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>TMFlix-Account</title>
        <link rel="shortcut icon" href ="images/ShortcutIcon.png"> 
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,800;0,900;1,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css//accountstylesheet.css">
    </head>
    <body>

     <div class="formcontainer">
        <h1>Account Details</h1> 
        <div class="formplace">
            <form>
                <label>Name:</label><br>
                <input type="text" id="#" name="#" value="<?php echo $_SESSION["Username"]?>"><br><br>
                <label>Email:</label><br>
                <input type="text" id="#" name="#" value="<?php echo $_SESSION["Email"]?>"><br><br>
                <label>Password:</label><br>
                <input type="password" id="#" name="#" value="<?php echo $_SESSION["Password"]?>"><br><br>
                <label>Phone NO:</label><br>
                <input type="text" id="#" name="#" value="<?php echo $_SESSION["Mobile"]?>"><br><br>
            </form>
            <center>
                <button type="">Update</button>
                <br>
                <button type="">Cancel</button>
                <br>
                <form action="receipt.php">
                <button type="submit">Receipt</button>
                </form>
        
            </center>
            
        </div>   
    </div>   
    </body>