<?php
    session_start();
    include 'database.php';
    $Email= $_SESSION["Email_Address"];

if(isset($_POST['save'])){
    $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
    $folder="upload/";
    $new_file_name = strtolower($file);
    $final_file=str_replace(' ','-',$new_file_name);
    if(move_uploaded_file($file_loc,$folder.$final_file))
        {
        $query= "UPDATE `signup` SET `File` = '$final_file' WHERE `signup`.`Email_Address` = '$Email'" ;
        $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");
        header ("Location: profil-page.php");
        }
    else 
        {
            echo "Error.Please try again";
        }   
}

?>