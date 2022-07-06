<?php
session_start();
if(isset($_POST['save']))
{
    extract($_POST);
    include 'database.php';
    $sql=mysqli_query($conn,"SELECT * FROM signup where Email_Address='$email' and Password='$pass'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["First_Name"]=$row['First_Name'];
        $_SESSION["Last_Name"]=$row['Last_Name'];
        $_SESSION["Email_Address"]=$row['Email_Address'];
        $_SESSION["Phone_Number"]=$row['Phone_Number'];
        $_SESSION["Date"]=$row['Date'];
        $_SESSION["Gander"]=$row['Gander']; 
        $_SESSION["User_Name"]=$row['User_Name'];
        $_SESSION["Password"]=$row['Password'];
        header("Location: profil-page.php"); 
    }
    else
    {
        echo "Invalid Email ID/Password";
    }
}
?>