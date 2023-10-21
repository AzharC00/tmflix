<?php
    session_start();
    //obtain data from the form of Login.php using POST method
    /*$email = $_POST['Email'];
    $password = $_POST['Password'];
    //Print the Email, Password
    echo "Email: "; 
    echo $email;
    echo "<br>";
    echo "Password: "; 
    echo $password;
    echo "<br><br>";
    */
     //Create Connection
     $server = "localhost";
     $username = "root";
     $dbpassword = "";
     $dbname = "tmflix";
 
     $conn = mysqli_connect($server, $username, $dbpassword, $dbname);
 
     if(!$conn){
         die("Connection: Failed" .mysqli_connect_error());
     }
    /*echo "Connected Successfully";
    echo "<br><br>";*/
 

    if(empty($_POST['Email']) || empty($_POST['Password'])){
        header("Refresh: 0.1; url= Login.php");
        echo '<script>alert("Both fileds are required")</script>)';
    }
    else{
        /* Get data from the AccountCustomerLogin.php */
        $Email = mysqli_real_escape_string($conn, $_POST["Email"]);
        $Password = mysqli_real_escape_string($conn, $_POST["Password"]); 
        $query = "SELECT * FROM mycustomer WHERE Email = '$Email'";
        $result = mysqli_query($conn, $query);
    
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                if($Password == $row["Password"]){
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
/*-----------------------------------------start get card-------------------------------------------- */
                if($_SESSION["membership"] == "Paid"){
                    $cardquery = "SELECT * FROM card WHERE CustomerID = '$ID'";
                    $cardresult = mysqli_query($conn, $cardquery);
                
                    if(mysqli_num_rows($cardresult) > 0){
                        while($cardrow = mysqli_fetch_array($cardresult)){
                            if($ID == $cardrow["CustomerID"]){
                                //return true
                                //Get Information from the same row for other details.
                                $cardID = $cardrow["CardID"];
                                $cardnum = $cardrow["cardnum"];
                                $_SESSION['cardID'] = $cardID;
                                $_SESSION['cardnum'] = $cardnum;

                            }
                            else{
                                //return false
                                header("Refresh: 0.1; url= Login.php");
                                echo '<script>alert("Something Went Wrong")</script>';
                            }
                        }
                    }
                    else{
                        header("Refresh: 0.1; url= Login.php");
                        echo '<script>alert("Cannot Get Card Detail")</script>';
                    }
                }
                else{
                    $_SESSION['cardnum'] = "No card number";
                }
/*-----------------------------------------end get card-------------------------------------------- */
                    // Go to Home page and display sucessful login
                    header("Refresh: 0.1; url= Home.php");
                    //echo "Hello, " . $_SESSION["Username"] . ".";
                    echo '<script>alert("Welcome to our Website will be directed to Home page now.")</script>';
                }
                else{
                    //return false
                    header("Refresh: 0.1; url= Login.php");
                    echo '<script>alert("Wrong Password")</script>';
                }
            }
    
        }
        else{
            header("Refresh: 0.1; url= Login.php");
            echo '<script>alert("Email Not Registered")</script>';
        }
        
    }   
    echo "<br><br>";
    //Close Connection (Security Measure)
    $resultclose = mysqli_close($conn);
    //Check if the connection closed successfully
    /*
    if($resultclose){
        echo " Close Connection Successful";
    }
    else{
        echo "Failed To close connection";
    }
    */
?>