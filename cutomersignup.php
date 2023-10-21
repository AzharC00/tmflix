<?php
    //obtain data from the form of Signup.php using POST method
    $name = $_POST['Username'];
    $mobile =$_POST['Mobile'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
/*
    //get date and format it
    $time = time();
    //change the date format to be display
    $startdt = date('d/m/y', $time);
    //Print the username, Email, Password, Phone, date
    
    echo "Username: "; 
    echo $name;
    echo "<br>";
    echo "Email: "; 
    echo $email;
    echo "<br>";
    echo "Password: "; 
    echo $password;
    echo "<br>";
    echo "Phone : "; 
    echo $mobile;
    echo "<br>";
    echo "Date : "; 
    echo $startdt;
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
   /* echo "Connected Successfully";
    echo "<br><br>";*/

/*    //change again the date format so can be inserted to database
    $startdt = date('Ymd', $time);
    echo "<br>";
    echo "Date : "; 
    echo $startdt;
    echo "<br><br>";
    */
    //Query
    $query = "INSERT INTO mycustomer(Username, Email, Password, Mobile) VALUES ('$name','$email','$password',$mobile)";
    //Use the connection and execute query
    $result = mysqli_query($conn,$query);
    //Check the result of the query
    if($result){
        //echo "Registered Successful";
        session_start();
        $query = "SELECT * FROM mycustomer WHERE Email = '$email'";
        $result = mysqli_query($conn, $query);
    
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                if($email == $row["Email"]){
                    //return true
                    //Get ID from the same row.
                    $ID = $row["CustomerID"];
                    $_SESSION["ID"] = $ID;
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

       header("Refresh: 0.1; url= Plan Payment.php");
    }
    else{
        header("Refresh: 0.1; url= Signup.php");
        echo "Failed To registered";
        echo '<script>alert("Registration fail")</script>)';
        
    }
    echo "<br><br>";
    //Close Connection (Security Measure)
    $resultclose = mysqli_close($conn);
 /*   //Check if the connection closed successfully
    if($resultclose){
        echo "Close Connection Successful";
    }
    else{
        echo "Failed To close connection";
    }
    */
?>