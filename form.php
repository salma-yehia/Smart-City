<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/all.min.css">
    <title>Sign1</title>
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
                        <p>Name</p>
                        <div class="bullet">
                            <span>1</span>
                            <div class="check fas fa-check"></div>
                        </div>
                    </div><!--1-->
                    <div class="step">
                        <p>Contact</p>
                        <div class="bullet">
                            <span>2</span>
                            <div class="check fas fa-check"></div>
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
                    <form action="sign2.php" class="form" method = "post" enctype="multipart/form-data">
                        <div class="page slidepage">
                            <div class="title">Basic Info:</div>
                            <div class="field">
                                <div id="label">First Name</div>
                                <input type="text" id="first-name" placeholder="First Name" name="first_name" required>
                            </div>
                            <div class="field">
                                <div id="label">Last Name</div>
                                <input type="text" id="last-name" placeholder="Last Name" name="last_name" required>
                            </div>
                            <div class="field next-btn">
                                <input type = "submit" name = "save" value = Next>
                            </div>
                            <div class="text">Already have an account?<a href="login.php"> Login Now</a></div>
                        </div><!-- Basic-info -->
                    </form>
                </div><!-- sign-form -->
            </section><!-- container -->
        </section><!--body-of-background-->
    </section>
    <script src="js/form.js"></script>
</body>
</html>