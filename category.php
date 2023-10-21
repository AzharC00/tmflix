<?php include("header.php");
    // DB Connect
    include './config.php';

    // Construct The Query
    if(isset($_GET["category"])) {
        $seriesCategory = $_GET["category"];
        $_SESSION["seriesCategory"] = $seriesCategory;
        $sqlSeries = "SELECT * FROM `tmflix`.`series` WHERE `SeriesGenre` = '$seriesCategory'";
    } 
    $resultSeries = $conn->query($sqlSeries);
?>
<!DOCTYPE html>
<html>
<body>
  <div style="position: absolute;
top: 150px;width:100%;">
        <?php
            echo "<h1>Genre:  ".strtoupper($seriesCategory)."</h1>";
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
            ?>
    </div>
</body>
</html>

