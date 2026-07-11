<?php
session_start();
include("db_connect.php");
include("dashboardheader.php");
if(!isset($_SESSION['user_name'])){
    header("Location:login.php");
    exit();
}
$userId=$_SESSION["user_id"];
$selectQuery="SELECT * FROM user WHERE id='$userID'";
$result=mysqli_query($conn,$selectQuery);
$user=mysqli_fetch_assoc($result);
?>
<div class="container-fluid">
    <div class="row">
<div class="col-md-3">
<a href="updatePassword.php">Update Password</a>
<br>
<a href="updateProfile.php">Update profile</a>
</div>
<div class="col-md-9">
    <h2> 
        <?php echo "Welcome, ".$_SESSION['user_name']."!";
echo "<br>";?>
<?php
echo "Name:".$_SESSION["user_name"]."<br>";
echo "Skills:".$user["skills"]."<br>";
echo "Role:".$_SESSION["role"];
?>
</h2>
</div>
<?php
include("footer.php");
include("dashboardfooter.php");
?>
