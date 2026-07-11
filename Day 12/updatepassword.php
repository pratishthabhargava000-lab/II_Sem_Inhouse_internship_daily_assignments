<?php
include("header.php");
include("checkupdateerror.php");
?>
<div class="container mt-5" style="max-width:400;">
      <h2 class="text-centre mb-4">Update Password</h2>
      <form action="" method="post">
        <input type="password" name="oldPassword" class="form-control mb-3" placeholder="Enter Old Password" required>
        <input type="password" name="newPassword" class="form-control mb-3" placeholder="Enter New Password" required>
        <input type="password" name="confirmPassword" class="form-control mb-3" placeholder="Confirm Password" required>
        <button type="submit" class="btn btn-primary w-100">Update Password</button>


        <!-- If don't have any account -->
        <p class="text-centre mt-3">Don't have an account?
            <a href="registration1.php">Register</a>
        </p>
      </form>
</div>
