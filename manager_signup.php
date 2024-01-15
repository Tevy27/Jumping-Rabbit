<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header.inc' ?>
    <title>Sign Up</title>
</head>
<body>
<header>
		<div id="logo"><img src="images/jrt.png" alt="logo" width="80"></div>
		<h1>Jumping Rabbit Technology</h1>
	</header>
		<?php include 'menu.inc'; ?>
		<section class="login">
		<h1>Sign up</h1>
		<form action="#" method="post">
			<p id="username">
				<label for="username">Username:</label>
				<input type="text"  placeholder="Enter username"  name="username" >			
			</p>
			<p>
				<label for="password">Password:</label>
				<input type="password"  placeholder="Enter password" id="password" name="password" >
			</p>
			<?php
			// display if there is a message from php
			if (isset($_GET["manager_msg"])) {					
				echo "<div class='manager_msg'>";
				echo $_GET["manager_msg"];
				echo "</div>";
			}
			?>
			<input type="submit" class="button" value="Sign up"><br>
			<a href="manager_login.php" id="signup">Have an account? Login Here!</a><br>
			<a href="index.php" id="signup">Back to index page</a>
			<p>Type username and password to signup</p>
		</form>
</section>

<?php 

function sanitise_input($data)
		{
			$data = trim($data);				//remove spaces
			$data = stripslashes($data);		//remove backslashes in front of quotes
			$data = htmlspecialchars($data);	//convert HTML special characters to HTML code
			return $data;
		}

require_once('settings.php');		//get connection information to database
$conn = @mysqli_connect($host,$user,$pwd,$sql_db);
if ($conn) {

	if (isset($_POST['name'])) {				//get the value
	$username=sanitise_input($_POST['name']);
	$password=sanitise_input($_POST['password']);

	$sql = "INSERT INTO managers (name, password) VALUES ('$name', '$password')";			//insert to the database from user input
	$result = mysqli_query($conn, $sql);
	if ($result) {
		$manager_msg = "You have successfully signup";//pop-up message if success
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