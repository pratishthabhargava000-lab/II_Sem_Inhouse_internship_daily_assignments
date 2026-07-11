<?php
session_start();

if($_SESSION["role"] != "admin"){
    header("Location: dashboard.php");
    exit();
}

include("dashboardheader.php");
?>

<div class="container mt-5">
    <h1>Admin Dashboard</h1>
<div class="mt-3">
<a href="updatePassword.php" class="btn btn-success">Update Password</a>
<a href="updateProfile.php" class="btn btn-success">Update Profile</a>
<br> <br>
</div>
    <h3>Welcome Admin, <?php echo $_SESSION["user_name"]; ?> </h3>

    <br>

    <a href="manageUsers.php" class="btn btn-primary">Manage Users</a>
    <a href="addUser.php" class="btn btn-success">Add User</a>
    <a href="reports.php" class="btn btn-warning">View Reports</a>

    <hr>

    <h4>Total Users</h4>
    <?php
    include("db_connect.php");

    $query = "SELECT COUNT(*) as total FROM user";
    $result = mysqli_query($conn,$query);
    $data = mysqli_fetch_assoc($result);

    echo $data["total"];
    ?>
</div>

<?php
include("footer.php");
?>
