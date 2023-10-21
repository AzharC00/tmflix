<?php include("header.php");
// Turn off all error reporting
error_reporting(0);

    include './config.php';
    if(isset($_POST['search']))
    {
        $valueToSearch = $_POST['valueToSearch'];
        // search in all table columns
        // using concat mysql function
        $query = "SELECT * FROM `series` WHERE CONCAT(`SeriesDescription`, `SeriesTitle`, `SeriesRating`) LIKE '%".$valueToSearch."%'";
        $resultSeries = $conn->query($query);     
    }
?>

<!DOCTYPE html>
<html>
<body>
  <div style="position: absolute; top: 150px;">
    <?php
            echo "<h1>Top Result: ".strtoupper($valueToSearch)."</h1>";
        ?>
    <section id="series">
            <?php 
                if($resultSeries->num_rows > 0){

                    // For Every Series Found
                    while($row = $resultSeries->fetch_assoc()) {

                        // Get The Data
                        $title =  $row["SeriesTitle"];
                        $strippedTitle = str_replace(' ', '', $title);
                        $desc = $row["SeriesDescription"];
                        $rate = $row["SeriesRating"];
                    
                        echo "

                        <div class='box'>
                        <!--img-box---------->
                        <div class='slide-img'>
                        <img src='images/$strippedTitle.png' class='resize'>
                        <!--overlayer---------->
                        <div class='overlay'>
                        <!--buy-btn------>	
                        <a href='#' class='watch-btn'>Watch Now</a>	
                        </div>
                        </div>
                        <!--detail-box--------->
                        <div class='detail-box'>
                        <!--type-------->
                        <div class='type'>
                        <a href='#'>$row[SeriesTitle]</a>
                        </div>                 
                        </div>                 
                        </div>";

                          }
                        echo "</div>";
               
                        }
                        else{
                        echo "<h1>No result found, we are so sorry</h1>";
                            }
             ?>
    </div>   
  </body>
</html>




