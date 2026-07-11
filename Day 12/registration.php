<?php
include("header.php");
include("db_connect.php");
include("checkRegistrationError.php");
?>
<div class="container mt-5"
style="max-width:400px;">
<?php
if($error !="")
{
    echo "<div class='alert alert-danger'>$error</div>";
}
?>
<form action=" " method="post">
    <h3 class="mb-3">Registration</h3>
    <input type="text" name="name" class="form-control mb-3" placeholder="Name" value="<?php echo isset($name)?$name:'';?>">
    <input type="email" name="email" class="form-control mb-3" placeholder="Email" value="<?php echo isset($name)?$name:'';?>">
    <input type="password" name="password" class="form-control mb-3" placeholder="Password" value="<?php echo isset($name)?$name:'';?>">
    <input type="password" name="confirm password" class="form-control mb-3" placeholder="Confirm Password" value="<?php echo isset($name)?$name:'';?>">

    <button type="submit" class="btn btn-primary w-100">Register</button>
</form>
</div>
<?php
include("footer.php");
?>
