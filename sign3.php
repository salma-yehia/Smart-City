<?php
extract($_POST);
session_start();
include("database.php");

if(isset($_POST['save'])){
    $_SESSION["user_name"] = $user_name;
    $_SESSION["phone_number"] = $phone_number;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/all.min.css">
    <title>Sign3</title>
</head>
<body>
    <section class="body">
        <div class="nav-btn">
            <button class="sign-btn">SignUp</button>
            <button class="login-btn">Login</button>
        </div>
        <div class="title-nav">
            <h2>Smart City</h2>
            <h2>Better Living</h2>
            <p>A smart city uses information and communication technology to improve operational efficiency, share information with public and provide a better quality of government service and citizen welfare.</p>
        </div>
        <section class="form-content">
            
            <section class="container sign">
                <h1>Signup Form</h1>
                <div class="progress-bar">
                    <div class="step">
                        <p class="active">Name</p>
                        <div class="bullet active">
                            <span>1</span>
                            <div class="active check fas fa-check"></div>
                        </div>
                    </div><!--1-->
                    <div class="step">
                        <p class="active">Contact</p>
                        <div class="bullet active">
                            <span>1</span>
                            <div class="active check fas fa-check"></div>
                        </div>
                    </div><!--2-->
                    <div class="step">
                        <p>Birth</p>
                        <div class="bullet">
                            <span>3</span>
                            <div class="check fas fa-check"></div>
                        </div>
                    </div><!--3-->
                    <div class="step">
                        <p>Submit</p>
                        <div class="bullet">
                            <span>4</span>
                            <div class="check fas fa-check"></div>
                        </div>
                    </div><!--4-->
                </div><!--progress-->
                <div class="sign-form">
                    <form action="sign4.php" class="form" method = "post" enctype="multipart/form-data">
                        <div class="page slidepage">
                            <div class="title">Date of Birth:</div>
                            <div class="field">
                                <div id="label">Date</div>
                                <input type="date" id="date" name="date" required>
                            </div>
                            <div class="field">
                                <div id="label">Gender</div>
                                <select name="gander" required>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                            <div class="field btns">
                                <button class="prev-2 prev"><a href = "sign2.php" class = "previous">Previous</a></button>
                                <input type = "submit" name = "save" value = Next class="next-2 next">
                            </div>
                        </div><!-- Date-Birth -->
                    </form>
                </div><!-- sign-form -->
            </section><!-- container -->
        </section>  
    </section><!--body-of-background-->
    <script src="js/form.js"></script>
</body>
</html>