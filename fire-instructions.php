<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/problem.css">
    <script src="js/jquery.min.js"></script> 
    <title>Problem</title>
</head>
<?php include 'nav.php'; ?>
        <section class="problem-section">
            <ul class="breadcrumb">
                <li>Problem</li>
            </ul>
            <h1>Natural Disasers</h1>
            <hr>
            <div class="fire-section">
                <div class="firealarm">
                    <div class="warning">
                        <i class="fas fa-exclamation-triangle"></i>
                        <span>Warning</span>
                    </div>
                    <div class="icon-warning">
                        <img src="img/fire-warning-sign.png" alt="">
                    </div><!-- icon-warning -->
                    <p>Please, Read the safety instructions.</p>
                    <button class="open-btn">Instructions</button>
                </div><!-- earthquack -->
                <div class="overlay-fire open-lay">
                    <div class="overlay-content">
                        <h2>Instructions</h2>
                        <img src="img/Fire_Extinguisher_Instructions_large.png" alt="" >
                    </div><!-- modal-content -->
                    <a href="problems.php"><button class="closed-btn2">
                        <i class="fas fa-window-close" ></i>
                    </button></a>
                </div><!-- overlay -->
            </div><!-- fire-section -->
        </section><!-- problem-section -->
        
    </section><!-- end warpper -->
     
    <script src="js/nav.js"></script>
</body>
</html>