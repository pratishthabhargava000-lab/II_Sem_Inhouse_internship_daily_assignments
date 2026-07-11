<?php

//logout.php
session_start();
//step1: clear all session data

$_SESSION=array();
//step2:Destroy the session
session_destroy();

//step3: Send user back to login
header("Location: login.php");
exit();
?>
