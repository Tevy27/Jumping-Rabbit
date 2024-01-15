<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header.inc' ?>
    <title>Login</title>
</head>
<body>
<header>
		<div id="logo"><img src="images/jrt.png" alt="logo" width="80"></div>
		<h1>Jumping Rabbit Technology</h1>
	</header>
		<?php include 'menu.inc'; ?>

<section class="login">
		<h1>Login to your account</h1>

		<form action="#" method="post">		
			<p id="username">
				<label for="username">Username</label>
				<input type="text"  placeholder="Enter username"  name="username" >	
			</p>
			<p>
				<label for="password">Password</label>
				<input type="password"  placeholder="Enter password" id="password" name="password" >
			</p>
			<?php
			if (isset($_GET["manager_msg"])) {
				echo "<div class='manager_msg'>";
				echo $_GET["manager_msg"];
				echo "</div>";
			}
			?>
			<input type="submit" class="button" value="Login"><br>
			<a href="manager_signup.php" id="signup">Don't have an account? Sign Up here!</a><br>
			<a href="index.php" id="signup">Back to index page</a>
			
			<p>Login without sign up: Username: admin <br />password: 123 </p>
		</form>
</section>

<?php 
require_once('settings.php');
$conn = @mysqli_connect($host,$user,$pwd,$sql_db);
if ($conn) {

	if (isset($_POST['name'])) {
	$username=$_POST['name'];
	$password=$_POST['password'];

	$sql = "SELECT * FROM managers WHERE name='$name'AND password='$password'";			//check the data with database
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) > 0)
	{
		session_start();
		//info
		$_SESSION['login_username'] = $name;
		$_SESSION['login_password'] = $password;
		header("location:manage.php");
	}
	else{
		$manager_msg = "ERROR: Wrong user name or password";					
		header("location:manager_login.php?manager_msg=$manager_msg");
	}
}

}
else{
	echo "Unable to connect to the database.";				
}

 ?>


<?php include 'footer.inc'; ?>
</body>
</html>