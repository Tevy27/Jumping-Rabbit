<!DOCTYPE html>
<html lang="en">
<head>
    <title>JRT-enhancement3</title>
    <?php include 'header.inc'; ?>
</head>
<body>
    <header>
        <div id="logo"><img src="images/jrt.png" alt="logo" width="80"></div>
        <h1>Jumping Rabbit Technology</h1>
    </header>
        <?php include 'menu.inc'; ?>
            <article id="enmargin">
                
            <h2>Welcome to Enhancement page 3</h2>
            <div >
            <form id= "clickclick" action="enhancements.php">
                <button>View Enhenacement 1 (CSS)</button>
                </form>
                <form action="enhancements2.php">
                <button>View Enhenacement 2 (Javascript)</button>
                </form>
            </div>
        <section id="enhance1">
            <h3>Login Logout sign up</h3>
            <p>This enhancemennt is allowing user to Sign up, login and log out from database.<br />
            source: https://www.youtube.com/watch?v=aIsu9SPcGbU </p>
            <a href="manage.php">Click here</a>
            </section>
            <section id="enhance2">
                <h3>sort search</h3>
            <p>The Second enhancement is allow user to use sort function to sort for a search result.<br/>
            source: https://www.w3schools.com/php/php_mysql_select_orderby.asp</p>
            <a href="manage.php">Click here</a>
            </section>
            <br/>
            
            </article>
<?php include 'footer.inc'; ?>
</body>
</html>