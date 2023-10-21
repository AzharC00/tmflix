<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>TMFlix-Card Payment</title>
        <link rel="shortcut icon" href ="images/ShortcutIcon.png"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/cardpayment.css">
    </head>
    <?php session_start();?>
    <body>
        <div class="container">
            <h2  style="text-align:center;">Set up your credit or debit card</h2>
            <div class="form_container">
                <form class="detail" action="Card_detail.php" method="POST">
                    <div class="field">
                        <input type="Text" name="fname" placeholder="First Name">
                    </div>
                    <div class="field">
                        <input type="Text" name="lname" placeholder="Last Name">
                    </div>
                    <div  class="field">
                        <input type="text" name="card_number" placeholder="Card Number">
                    </div>
                    <div class="field">
                        <input type="month" name="exp_date" placeholder="Expiry date">
                    </div>
                    <div class="field">
                        <input type="text" name="code" placeholder="Security code (CVV)">
                    </div>
                    <div class="plan">
                        RM <?php echo $_SESSION['price']?>
                        <br>
                        <?php echo $_SESSION['plan']?> Plan
                        <a class="change" href="Plan Payment.php"> Change</a>
                    </div>
                    <input type="submit" value="Start Membership">
                </form>
            </div>
        </div>
    </body>
</html>