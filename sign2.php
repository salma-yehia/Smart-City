<?php
extract($_POST);
session_start();
include("database.php");

if(isset($_POST['save'])){
    $_SESSION["first_name"] = $first_name;
    $_SESSION["last_name"] = $last_name;
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
    <title>Sign2</title>
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
                    </div>
                    <div class="step">
                        <p>Contact</p>
                        <div class="bullet">
                            <span>2</span>
                            <div class="check fas fa-check"></div>
                        </div>
                    </div>
                    <div class="step">
                        <p>Birth</p>
                        <div class="bullet">
                            <span>3</span>
                            <div class="check fas fa-check"></div>
                        </div>
                    </div>
                    <div class="step">
                        <p>Submit</p>
                        <div class="bullet">
                            <span>4</span>
                            <div class="check fas fa-check"></div>
                        </div>
                    </div>
                </div><!--progress-->
                <div class="sign-form">
                    <form action="sign3.php" class="form" method = "post" enctype="multipart/form-data">
                        
                        <div class="page slidepage">
                            <div class="title">Contact Info:</div>
                            <div class="field">
                            <div id="label">User Name</div>
                                <input type="text" id="user-name" placeholder="User Name" name="user_name" required>
                            </div>    
                            <div class="field">
                                <div id="label">Phone Number</div>
                                <input type="text" id="phone" placeholder="Mobile number" name="phone_number" required>
                            </div>
                            <div class="field btns">
                                <button class="prev-1 prev" ><a href = "form.php" class = "previous">Previous</a></button>
                                <input type = "submit" name = "save" value = Next class="next-1 next">
                            </div>
                        </div><!-- contact-info -->
                    </form>
                </div><!-- sign-form -->
            </section><!-- container -->
        </section>
    </section><!--body-of-background-->
    <script src="js/form.js"></script>
</body>
</html>