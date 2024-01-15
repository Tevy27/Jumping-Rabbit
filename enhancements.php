<!DOCTYPE html>
<html lang="en">
<head>
    <title>JRT-enhancement</title>
    <?php include 'header.inc'; ?>
</head>
<body>
    <header>
        <div id="logo"><img src="images/jrt.png" alt="logo" width="80"></div>
        <h1>Jumping Rabbit Technology</h1>
    </header>
        <?php include 'menu.inc'; ?>
            <article id="enmargin">
                
            <h2>Welcome to Enhancement page</h2>
            <div>
              <form  id= "clickclick" action="enhancements2.php">
                <button>View Enhenacement 2 (Javascript)</button>
                </form>
                <form action="phpenhancements.php">
                <button>View Enhenacement 3 (PHP)</button>
                </form>
            </div>
        <section id="enhance1">
            <h3>Enhancement1</h3>
            <p>The First enhancement is about the "social media buttons" that link to the social media page of the company. It's located at the very right at every buttom of the pages. Try click on the "social media button".<br /> :)</p>
            <a href="enhancements.php#contactfooter">Click here</a>
            </section>
            <section id="enhance2">
                <h3>Enhancement2</h3>
            <p>The Second enhancement is about the "Drop down Menu" that will show you about ther information when click on it. It's located at the very right on "Index Page". Try click on the "Learn More button".<br /> :D</p>
            <a href="index.php#dropbtn">Click here</a>
            </section>
            <br/>

            </article>
<?php include 'footer.inc'; ?>
</body>
</html>