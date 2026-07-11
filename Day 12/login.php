<?php
include("header.php");
include("checkloginerror.php");
?>
<div class="container mt-5" style="max-width:400;">
      <h2 class="text-centre mb-4">Login</h2>
      <form action="" method="post">
        <input type="email" name="email" class="form-control mb-3" placeholder="Enter Email" required>
        <input type="password" name="password" class="form-control mb-3" placeholder="Enter Password" required>
        <button type="submit" class="btn btn-primary w-100">Login</button>


        <!-- If don't have any account -->
        <p class="text-centre mt-3">Don't have an account?
            <a href="registration1.php">Register</a>
        </p>
      </form>
</div>
