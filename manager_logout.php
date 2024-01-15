<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header.inc' ?>
<title>Login</title>
</head>
<body>
<?php include("menu.inc"); ?>
<section class="content" id="payment_content">
<h1>You have logged out</h1>
<?php 
session_start();
if (isset($_SESSION['login_username'])) {
//if user already login, destroy the stored session with all log in data.
	session_destroy();
}
 ?>



</section>
<?php include("footer.inc"); ?>
</body>
</html>