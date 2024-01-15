<!DOCTYPE html>
<html lang="en">
<head>
    <title>JRT-enhancement2</title>
    <?php include 'header.inc'; ?>
</head>
<body>
    <header>
        <div id="logo"><img src="images/jrt.png" alt="logo" width="80"></div>
        <h1>Jumping Rabbit Technology</h1>
    </header>
        <?php include 'menu.inc'; ?>
            <article id="enmargin">
                
            <h2>Welcome to Enhancement page 2</h2>
            <div>
            <form id= "clickclick" action="enhancements.php">
                <button>View Enhenacement 1 (CSS)</button>
                </form>
                <form action="phpenhancements.php">
                <button>View Enhenacement 3 (PHP)</button>
                </form>
            </div>
        <section id="enhance1">
            <h3>Modal: Newsletter</h3>
            <p>This enhancement is to prompt a user to subscribe their Newsletter in <strong>5second</strong> after clicking on this page.<br />
            source: https://www.w3schools.com/howto/howto_css_newsletter.asp </p>
            <a href="index.php">Click here</a>
            </section>
            <section id="enhance2">
                <h3>Back to Top</h3>
            <p>The Second enhancement is about scrolling back to the top after scrollng down for about 200px.<br/>
            source: https://www.w3schools.com/howto/howto_js_scroll_to_top.asp</p>
            <a href="index.php#contactfooter">Click here</a>
            </section>
            <br/>

            </article>
<?php include 'footer.inc'; ?>
</body>
</html>