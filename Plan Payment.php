<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>TMFlix-Choose Plan</title>
        <link rel="shortcut icon" href ="images/ShortcutIcon.png"> 
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,800;0,900;1,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/planpayment.css">
    </head>

    <body>
        <div class="plan_container">
            <h1>Choose Your Plan</h1>
            <table>
                <tr><th></th>
                    <td class = "tablelabel">Basic</td>
                    <td class = "tablelabel">Premium</td>
                </tr>
                <tr><th>Monthly Price</th>
                    <td>RM17</td>
                    <td>RM39</td>
                </tr>
                
                <tr><th>Number of Device</th>
                    <td>Single</td>
                    <td>Multiple</td>
                </tr>

                <tr><th>Select Your Option</th>
                    <form action="PlanPay execution.php" method="POST">
                        <td><input type="radio"  name="choice" value="Basic"><label for="basic">Basic</label></td>
                        <td><input type="radio"  name="choice" value="Premium"><label for="premium">Premium</label></td>
                    
                </tr>
            </table>
            <button type="submit" class="cont_button">Continue</button>
            </form>
             <form action="freeuserdirect.php" method="POST">
                <br><br>
                <button type="submit" class="free">Or Start Your 30-days Free Trial</button>
            </form> 
        </div>
        
    </body>
</html>