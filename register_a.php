<?php
extract($_POST);
include("database.php");
$sql=mysqli_query($conn,"SELECT * FROM signup where Email_Address='$email'");
if(mysqli_num_rows($sql)>0)
{
    echo "Email Id Already Exists"; 
	exit;
}
if(isset($_POST['save'])){
    session_start();
    $first_name=$_SESSION["first_name"];
    $last_name=$_SESSION["last_name"];
    $user_name=$_SESSION["user_name"];
    $phone_number=$_SESSION["phone_number"];
    $date=$_SESSION["date"];
    $gander=$_SESSION["gander"];
    $image = "person-icon.png";

        $query="INSERT INTO signup(First_Name, Last_Name, Email_Address,  Phone_Number, Date , Gander , User_Name, Password , File) 
        VALUES ('$first_name', '$last_name', '$email', '$phone_number' , '$date' , '$gander' , '$user_name' , '$pass' , '$image')";
        $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");
        header ("Location: login.php");  
}

?>