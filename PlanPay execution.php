<?php
    //Create Connection
    $server = "localhost";
    $username = "root";
    $dbpassword = "";
    $dbname = "tmflix";

    $conn = mysqli_connect($server, $username, $dbpassword, $dbname);

    if(!$conn){
        die("Connection: Failed" .mysqli_connect_error());
    }
    session_start();
    $choicevalue = $_POST['choice'];
    echo "You are a " .$choicevalue. " Member";

    $ID = $_SESSION['ID'];

    $query1 = "UPDATE mycustomer SET plan='$choicevalue' WHERE CustomerID='$ID'";
    $result1=mysqli_query($conn, $query1);

    $time = time();
    $startdt = date('Ymd', $time);
    $query2 = "UPDATE mycustomer SET startdate='$startdt' WHERE CustomerID='$ID'";
    $result2=mysqli_query($conn, $query2);

    $membership = 'Paid';
    $query3 = "UPDATE mycustomer SET Membership_type='$membership' WHERE CustomerID='$ID'";
    $result3=mysqli_query($conn, $query3);


    $enddt = date("Y-m-d", strtotime(date("Y-m-d", strtotime($startdt)). "+ 30 day"));
    $query4 = "UPDATE mycustomer SET enddate='$enddt' WHERE CustomerID='$ID'";
    $result4=mysqli_query($conn, $query4);

    if($choicevalue == "Basic"){
        $price = 17.00;
    }
    else{
        $price = 39.00;
    }

    $query5 = "UPDATE mycustomer SET price='$price' WHERE CustomerID='$ID'";
    $result5=mysqli_query($conn, $query5);

        
       
    $query = "SELECT * FROM mycustomer WHERE CustomerID = '$ID'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            if($ID == $row["CustomerID"]){
                //return true
                //Get Information from the same row for other details.
                $ID = $row["CustomerID"];
                $uname = $row["Username"];
                $emailfromdb = $row["Email"];
                $passfromdb = $row["Password"];
                $Mobile = $row["Mobile"];
                $dbdate = $row["startdate"];
                $starteddate = date("Y-m-d", strtotime($dbdate));
                $enddate = date("Y-m-d", strtotime(date("Y-m-d", strtotime($dbdate)). "+ 30 day"));
                $membership = $row["Membership_type"];
                $plan = $row["plan"];
                $price = $row["price"];
                $_SESSION["ID"] = $ID;
                $_SESSION["Email"] = $emailfromdb;
                $_SESSION["Password"] = $passfromdb;
                $_SESSION["Username"] = $uname;
                $_SESSION["Mobile"] = $Mobile;
                $_SESSION["startdate"] = $starteddate;
                $_SESSION["enddate"] = $enddate;
                $_SESSION["plan"] = $plan;
                $_SESSION["membership"] = $membership;
                $_SESSION["price"] = $price;
            }
            else{
                //return false
                header("Refresh: 0.1; url= Signup.php");
                echo '<script>alert("Something went wrong")</script>)';
            }
        }

    }
    else{
        header("Refresh: 0.1; url= Signup.php");
        echo '<script>alert("Something went wrong")</script>)';
    }

    mysqli_close($conn);
    
    header("Refresh: 0.1; url= CardPayment.php");

    
?>