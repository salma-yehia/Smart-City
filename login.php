<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/all.min.css">
    <title>login</title>
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
            <div class="container login-div">
                <h1 style="margin:50px 0px ;">Login Form</h1>
                <div class="login-form">
                    <p>Don't have an acount? <span><a href = "form.php">Creat your account. </a></span>it takes less than a minute.</p>
                    <form action="loginProcess.php" method="post" enctype="multipart/form-data">
                        <div class="page">
                            <div class="field">
                                <div id="label">Email Address</div>
                                <input type="email" id="email-add" placeholder="Enter your email" name = "email" require>
                            </div><!--email-->
                            <div class="field">
                                <div id="label">Password</div>
                                <input type="password" id="pass" placeholder="Enter your Password" name = "pass" require>
                            </div><!--password-->
                            <div class="field btns">
                                <input type="submit" class="login" value="Login" name = "save">
                            </div><!--submit-->
                            <div class="text">Don't have an account?<a href="form.php"> SignUp Now</a></div>
                        </div>
                    </form>
                </div><!--login-form-->
            </div><!-- container-->
        </section><!--body-of-background-->
        
    </section>
    <script src="js/form.js"></script>
</body>
</html>