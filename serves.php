<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/serves.css">
    <link rel="stylesheet" href="css/temerature.css">
    <link rel="stylesheet" href="css/loading soil.css">
    <link rel="stylesheet" href="css/heart.css">
    <link rel="stylesheet" href="css/rain.css">
    <link rel="stylesheet" href="css/problem.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <script src="js/jquery.min.js"></script> 
    <title>Services</title>
</head>
<?php include 'mistake.php'; ?> 
        <section class="services">
            <ul class="breadcrumb">
                <li>Services</li>
            </ul>
            <h1>Sensors</h1>
            <hr>
            <div class="tabs">
                <div class="tab-header">
                    <div class="active">
                        <i class="fas fa-temperature-high"></i>Temperature
                    </div>
                    <div>
                        <i class="fas fa-seedling"></i>Soil
                    </div>
                    <div>
                        <i class="fas fa-heartbeat"></i>Heart Beat
                    </div>
                    <div>
                        <i class="fas fa-cloud-rain"></i>The Rain
                    </div>
                </div>
                <!-- tab-header -->
                <div class="tab-indicator"></div>
                <!-- tab-indicator -->
                <div class="tab-body">
                    <div id="temperature" class="active">
                        <section class="temperature-container">
                            <section class="widget">
                                <section class="left-side" id = "scores5">
                                    <?php 
                                        $sql3=mysqli_query($conn,"SELECT * FROM temp");
                                        $example3= "SELECT * FROM temp ORDER BY id DESC LIMIT 1";
                                        if($result3 = mysqli_query($conn, $example3)){
                                            if(mysqli_num_rows($result3) > 0){
                                                while($row3 = mysqli_fetch_array($result3)){
                                                    $temp =$row3['temperature'] ;
                                                    if($temp<30){
                                                        echo '<img class="img-temp" src="img/icons/cloud.svg" alt="">
                                                            <h4 class="status">Partly Cloudy</h4>' ;                                                                  
                                                            }
                                                    else{
                                                        echo '<img class="img-temp sunny" src="img/icons/sun-color.svg" alt="">
                                                            <h4 class="status">Sunny</h4>' ;                                                                                                                                      
                                                        }
                                                }
                                                mysqli_free_result($result3);
                                            } else{
                                                echo "No records matching your query were found.";
                                                }
                                        } else{
                                            echo "ERROR: Could not able to execute $sq3. " . mysqli_error($conn);
                                            }
                                    ?>                                    
                                </section>
                                <!-- left-side-->
                                <section class="right-side">
                                    <h4 class="city">Alexadria</h4>
                                    <h4 class="degree" id = "scores1">
                                        <?php 
                                            $sql1=mysqli_query($conn,"SELECT * FROM temp");
                                            $example1 = "SELECT * FROM temp ORDER BY id DESC LIMIT 1";
                                                if($result1 = mysqli_query($conn, $example1)){
                                                    if(mysqli_num_rows($result1) > 0){
                                                        while($row1 = mysqli_fetch_array($result1)){
                                                                $temp =$row1['temperature'] ;
                                                                echo $temp;
                                                        }
                                                            mysqli_free_result($result1);
                                                    } else{
                                                        echo "No records matching your query were found.";
                                                    }
                                                } else{
                                                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                                                }
                                        ?>°C</h4>
                                </section><!-- right-side-->
                                <section class="bottom">
                                    <section>
                                        <h5>Humidity </h5>
                                        <span id = "scores2">
                                            <?php
                                                $sql2=mysqli_query($conn,"SELECT * FROM humi");
                                                $example2 = "SELECT * FROM humi ORDER BY id DESC LIMIT 1";
                                                    if($result2 = mysqli_query($conn, $example2)){
                                                        if(mysqli_num_rows($result2) > 0){
                                                            while($row2 = mysqli_fetch_array($result2)){
                                                                    $humi =$row2['humidity'] ;
                                                                    echo $humi;
                                                            }
                                                                mysqli_free_result($result2);
                                                        } else{
                                                            echo "No records matching your query were found.";
                                                        }
                                                    } else{
                                                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                                                    }
                                            ?>%</span>
                                    </section>
                                </section>
                                <!-- bottom -->
                            </section>
                            <!-- widget -->
                        </section>
                        <!-- temperature-container -->
                    </div>
                    <!-- temperature --> 
                    <div id="soil">
                        <section class="card js">
                            <section class="circle-img">
                                <img src="img/soil12.JPEG">
                            </section><!-- circle-img -->
                            <section class="text-soil" id = "scores9">
                                <h1><?php 
                                        $sql6=mysqli_query($conn,"SELECT * FROM soil");
                                        $example6 = "SELECT * FROM soil ORDER BY id DESC LIMIT 1";
                                        if($result6 = mysqli_query($conn, $example6)){
                                            if(mysqli_num_rows($result6) > 0){
                                                while($row6 = mysqli_fetch_array($result6)){
                                                    $soil =$row6['soil'] ;
                                                    echo $soil;
                                                }
                                                mysqli_free_result($result6);
                                            } else{
                                                echo "No records matching your query were found.";
                                                }
                                        } else{
                                            echo "ERROR: Could not able to execute $sq6. " . mysqli_error($conn);
                                            }
                                        ?>%</h1>
                                <h2 class="text">The Soil is Wet</h2>
                            </section><!-- text-soil -->
                        </section>
                    </div>
                    <!-- soil -->                   
                    <div id="heart">
                        <section class="heart-content">
                            <h5>Heart Beat :</h5>
                            <h4 id = "scores6"><?php 
                                    $sql4=mysqli_query($conn,"SELECT * FROM heart");
                                    $example4 = "SELECT * FROM heart ORDER BY id DESC LIMIT 1";
                                    if($result4 = mysqli_query($conn, $example4)){
                                        if(mysqli_num_rows($result4) > 0){
                                            while($row4 = mysqli_fetch_array($result4)){
                                                $heart =$row4['heart'] ;
                                                    echo $heart;
                                            }
                                            mysqli_free_result($result4);
                                        } else{
                                                echo "No records matching your query were found.";
                                                }
                                    } else{
                                        echo "ERROR: Could not able to execute $sq4. " . mysqli_error($conn);
                                        }
                                ?> <span> BPM</span></h4>
                            <h5>oxygen ratio :</h5>
                            <h4 id = "scores7"><?php 
                                $sql5=mysqli_query($conn,"SELECT * FROM oxygen");
                                $example5 = "SELECT * FROM oxygen ORDER BY id DESC LIMIT 1";
                                if($result5 = mysqli_query($conn, $example5)){
                                    if(mysqli_num_rows($result5) > 0){
                                        while($row5 = mysqli_fetch_array($result5)){
                                            $oxygen =$row5['oxygen'] ;
                                                echo $oxygen;
                                            }
                                        mysqli_free_result($result5);
                                    } else{
                                        echo "No records matching your query were found.";
                                        }
                                } else{
                                        echo "ERROR: Could not able to execute $sq5. " . mysqli_error($conn);
                                        }
                                ?><span> %</span></h4>
                        </section>
                        <!-- heart-content -->
                        <section class="heart"></section>
                    </div>
                    <!-- heart -->
                    <div id="rain">
                        <?php 
                            $sql7=mysqli_query($conn,"SELECT * FROM rain");
                            $example7= "SELECT * FROM rain ORDER BY id DESC LIMIT 1";
                            if($result7 = mysqli_query($conn, $example7)){
                                if(mysqli_num_rows($result7) > 0){
                                    while($row7 = mysqli_fetch_array($result7)){
                                        $rain =$row7['rain'] ;
                                        if($rain<30){
                                            echo '<h2 class="notes">It\'s Raining, please don\'t forget your umbrella.</h2>
                                                    <section class="raining-cloud"></section>' ;                                                                  
                                                }
                                        else{
                                            echo '<h2 class="notes">There is no rain, go out for a picnic and enjoy the weather.</h2>
                                                    <section class="raining-cloud" style = "--raining_after_display:none;"></section>' ;                                                                                                                                      
                                            }
                                    }
                                    mysqli_free_result($result7);
                                } else{
                                    echo "No records matching your query were found.";
                                    }
                            } else{
                                echo "ERROR: Could not able to execute $sq7. " . mysqli_error($conn);
                                }
                        ?>     
                    </div><!-- rain -->

                </div>
                <!-- tab-body -->
            </div>
            <!-- tabs-section -->
        </section>
        <!-- services -->

    </section>
    <!-- end warpper -->

    <script src="js/services.js"></script>
    <script src="js/nav.js"></script>
    
</body>

</html>