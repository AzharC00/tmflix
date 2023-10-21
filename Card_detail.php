<?php
    session_start();
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $cardnum = $_POST['card_number'];
    $expdate = $_POST['exp_date'];
    $code = $_POST['code'];

    $expdatenew=date("Ymd", strtotime($expdate));

    $custID = $_SESSION['ID'];

    echo "first name: " .$fname. ". <br>";
    echo "last name: " .$lname. ". <br>"; 
    echo "card number: " .$cardnum. ". <br>"; 
    echo "expiration date: " .$expdate. ". <br>"; 
    echo "New format exp date: " .$expdatenew. ". <br>";
    echo "security code: " .$code. ". <br>"; 
    echo "first name: " .$_SESSION["Username"]. ". <br>";
    echo "Cust ID: " .$custID. ". <br>";

    //Create Connection
    $server = "localhost";
    $username = "root";
    $dbpassword = "";
    $dbname = "tmflix";

    $conn = mysqli_connect($server, $username, $dbpassword, $dbname);

    if(!$conn){
        die("Connection: Failed" .mysqli_connect_error());
    }

    $query="INSERT INTO card(CustomerID, fname, lname, cardnum, expiration, securityCode) VALUES('$custID','$fname','$lname','$cardnum','$expdatenew','$code')";
    $result=mysqli_query($conn,$query);

    if($result){
        echo "Store data Successful";
        header("Refresh: 0.1; url= Login.php");
        echo '<script>alert("Registration Done")</script>';
    }
    else{
        echo "Something went wrong";
    }
?>