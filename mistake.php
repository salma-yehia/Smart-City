<?php 
    include 'nav.php'; 
    include 'database.php';      
?>
<div id="scores3">
    <?php
        $sql3=mysqli_query($conn,"SELECT * FROM fire");
        $example3 = "SELECT * FROM fire ORDER BY id DESC LIMIT 1";
        if($result3 = mysqli_query($conn, $example3)){
            if(mysqli_num_rows($result3) > 0){
                while($row3 = mysqli_fetch_array($result3)){
                    $fire =$row3['fire'] ;
                    if($fire>200){
                        echo '<section class="problem-section">
                                <ul class="breadcrumb">
                                    <li>Problem</li>
                                </ul>
                                <h1>Natural Disasers</h1>
                                <hr><div class="fire-section">
                                <div class="firealarm">
                                    <div class="warning">
                                        <i class="fas fa-exclamation-triangle"></i>
                                        <span>Warning</span>
                                    </div>
                                    <div class="icon-warning">
                                        <img src="img/fire-warning-sign.png" alt="">
                                    </div><!-- icon-warning -->
                                    <p>Please, Read the safety instructions.</p>
                                    <a href = "fire-instructions.php"><button class="open-btn">Instructions</button></a>
                                </div><!-- fire -->
                            </div><!-- fire-section -->';
                            }
                        }
                        mysqli_free_result($result3);
            } else{
                    echo "No records matching your query were found.";
                    }
        } else{
                echo "ERROR: Could not able to execute $sql3. " . mysqli_error($conn);
                }
    ?>            
</div>
<div id="scores4">
    <?php
        $sql4=mysqli_query($conn,"SELECT * FROM earthquack");
        $example4 = "SELECT * FROM earthquack ORDER BY id DESC LIMIT 1";
        if($result4 = mysqli_query($conn, $example4)){
            if(mysqli_num_rows($result4) > 0){
                while($row4 = mysqli_fetch_array($result4)){
                    $earthquack =$row4['earthquack'] ;
                    if($earthquack>9){
                        echo '<section class="problem-section">
                            <ul class="breadcrumb">
                                <li>Problem</li>
                            </ul>
                            <h1>Natural Disasers</h1>
                            <hr><div class="earthquack-section">
                                <div class="earthquack">
                                    <div class="warning">
                                        <i class="fas fa-exclamation-triangle"></i>
                                        <span>Warning</span>
                                    </div>
                                    <div class="icon-warning">
                                        <img src="img/warning1.png" alt="">
                                    </div><!-- icon-warning -->
                                    <p>Please, Read the safety instructions.</p>
                                    <a href="earthquack-instructions.php"><button class="open-btn">Instructions</button></a>
                                </div><!-- earthquack -->
                            </div><!-- earthquack-section -->';
                        }      
                }
                mysqli_free_result($result4);
            } else{
                    echo "No records matching your query were found.";
                    }
        } else{
                echo "ERROR: Could not able to execute $sql4. " . mysqli_error($conn);
                } 
    ?>
</div>
<script>
        var $scores3 = $("#scores3");
        setInterval(function() {
        $scores3.load("mistake.php #scores3");
        }, 3000);
        var $scores4 = $("#scores4");
        setInterval(function() {
        $scores4.load("mistake.php #scores4");
        }, 3000);
</script>  