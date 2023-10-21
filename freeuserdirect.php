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
    $ID = $_SESSION['ID'];

    $query1 = "UPDATE mycustomer SET plan='Free-Trial' WHERE CustomerID='$ID'";
    $result=mysqli_query($conn, $query1);

    $time = time();
    $startdt = date('Ymd', $time);
    $query2 = "UPDATE mycustomer SET startdate='$startdt' WHERE CustomerID='$ID'";
    $result2=mysqli_query($conn, $query2);

    $membership = 'Trial';
    $query3 = "UPDATE mycustomer SET Membership_type='$membership' WHERE CustomerID='$ID'";
    $result3=mysqli_query($conn, $query3);


    $enddt = date("Y-m-d", strtotime(date("Y-m-d", strtotime($startdt)). "+ 30 day"));
    $query4 = "UPDATE mycustomer SET enddate='$enddt' WHERE CustomerID='$ID'";
    $result4=mysqli_query($conn, $query4);

    
        $price = 00.00;

    $query = "UPDATE mycustomer SET price='$price' WHERE CustomerID='$ID'";

    $result3=mysqli_query($conn, $query);

   header("Refresh: 0.1; url= Login.php");

    mysqli_close($conn);

?>