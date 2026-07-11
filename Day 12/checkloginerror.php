<?php
session_start();
include("db_connect.php");
$error="";

$email = "";
$password = "";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $email=mysqli_real_escape_string($conn,$_POST["email"]);
    $password=mysqli_real_escape_string($conn,$_POST["password"]);


    if($email==""||$password==""){
        $error="All field are required.";
    }
    else{
        $selectQuery="SELECT * FROM user WHERE email='$email' AND password='$password'";

        $result=mysqli_query($conn,$selectQuery);
        $user=mysqli_fetch_assoc($result);
        if($user){

            $_SESSION["user_id"]=$user["id"];
            $_SESSION["user_name"]=$user["name"];
            $_SESSION["user_email"]=$user["email"];
            $_SESSION["role"]=$user["role"];
            header("Location: admindashboard.php");
            exit();
            
        }
        else{
            header("Location: dashboard.php");
            exit();
        }
        // else{
        //     echo "Invaild Creditials.";
        //     echo "ERROR:".mysqli_error($conn);
        // }
    }
}
?>
