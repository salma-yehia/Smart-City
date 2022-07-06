<?php
    session_start();
    include 'database.php';
    $Email= $_SESSION["Email_Address"];
    $sql=mysqli_query($conn,"SELECT * FROM signup where Email_Address='$Email' ");
    $row  = mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/profile-page.css">
    <link rel="stylesheet" href="css/problem.css">
    <script src="js/jquery.min.js"></script> 
    <title>Profile</title>
</head>
<?php include 'mistake.php'; ?> 
        <section class="profile-section">
            <ul class="breadcrumb">
                <li>My Profile</li>
            </ul>
            <h1>Hello, <?php echo $_SESSION["User_Name"] ?></h1>
            <hr>
        </section><!-- Profile-section -->
        <div class="warpper-profile">
            <div class="content-profile">
                <div class="img-profile">
                    <label for="file" class="upload">
                        <img src="upload/<?php echo $row['File'] ?>">
                    </label>
                    <i class="fas fa-camera"></i>
                    <form action="pic.php" method="post" enctype="multipart/form-data" class="form">
                        <input type="file" name="file" id="file" accept="file/*" onchange="loadfile(event)">                    
                </div><!-- img-profile -->

                <input type="submit" value="Save" name = "save"> 
                <div class="name"><?php echo $_SESSION["User_Name"] ?></div>
            </div><!-- content-profile -->

            <div class="about-me active" id="about">
                <div class="social-icons">
                    <a href="https://ar-ar.facebook.com" target="blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/i/flow/login" target="blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com" target="blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/login/ar" target="blank"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://github.com/login" target="blank"><i class="fab fa-github"></i></a>
                </div><!-- social-icons -->
            </div><!-- about-me -->

            <div class="email contact">
                <i class="fas fa-envelope"></i>
                <p><?php echo $_SESSION["Email_Address"] ?></p>
            </div><!-- contact-email -->
    
            <div class="phone contact">
                <i class="fab fa-whatsapp"></i>
                <p><?php echo $_SESSION["Phone_Number"] ?></p>
            </div><!-- contact-phone -->

        </div><!-- warpper-profile -->
    </section><!-- end warpper -->
     

    
    <script>
        const upload_event = document.querySelector("#file");
        const upload = document.querySelector(".upload");
        const image = document.querySelector(".img-profile img");

        /// function to get image source attribute
        let loadfile = function(event){
            let image = document.querySelector(".img-profile img");
            ////console.log(image);
            image.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>

    <script src="js/nav.js"></script> 
</body>
</html>