<?php
include("db_connect.php");
$error="";

$name="";
$email="";
$password="";
$confirmpassword="";

if ($_SERVER["REQUEST_METHOD"]=="POST"){

$name=mysqli_real_escape_string($conn,$_POST["name"]);
$email=mysqli_real_escape_string($conn,$_POST["email"]);
$password=mysqli_real_escape_string($conn,$_POST["password"]);
$confirmpassword=mysqli_real_escape_string($conn,$_POST["confirm_password"]);

if($name==""|| $email==""|| $password=="")
{
    $error="All fields are required.";
} 
elseif($password != $confirmpassword)
{
    $error="Passwords do not match.";
}
else{
    $insertQuery="INSERT INTO user(name,email,password,role,skills,profile_pic) VALUES('$name','$email','$password','student','','')";
    $result= mysqli_query($conn,$insertQuery);
    if($result){
    header("Location: success.php");
    exit();
    }
    else{
        echo mysqli_error($conn);
    }
}
}
?>
