<!DOCTYPE html>
<html lang="en">
<head>
	<title>JRT-index</title>
	<?php include 'header.inc'; ?>
	<script src="scripts/enhancements2.js"></script>
</head>
<body>
	<header>
		<div id="logo"><img src="images/jrt.png" alt="logo" width="80"></div>
		<h1>Jumping Rabbit Technology</h1>	
	</header>
		<?php include 'menu.inc'; ?>
	<article>
	<h2>About us</h2>
	<!-- Back to top button-->
        <button id="back_to_top">Back To Top</button>
	<div class="dropdown">
              <button class="dropbtn" id="dropbtn">Learn More >></button>
              <div class="dropdown-content">
                <a href="styles/other/under_construction.html">Digital News</a>
              <a href="styles/other/under_construction.html">Our Services</a>
              <a href="styles/other/under_construction.html">Our Team</a>
              </div>
            </div>
	<Section id="section1"><h3>The Bussiness in Digital Era</h3>
	<p><img id ="photo" src="images/IT.jpg" alt="asidepic" width="400">Jumping Group is an IT and Data management company. We offer professional services on basic IT services such as Web-development, Mobile Application development, Management information sytem (MIS), database management system, business data analytics including big data.<br />Our responsibility at Your IT Company is to develop a stable, healthy, and controlled IT environment so your company can grow. We take preventative measures to ensure your security before, during and after an attack. With a Managed IT plan, you are always ahead of the game. Our team of expert technicians can provide custom solutions to suit any size company through our versatile IT support options. We know that your focus should be on growing your business. Our focus at Your IT Company is providing expert IT support services within your comprehensive plan, including management, maintenance, and support for all your IT needs.
	</p>
	</Section>
	<div class="col-container">
	<section class="col" id="mission"><h3>Our Mission</h3>
		<p>Our mission is to contribute to the digital transformation of Cambodia public sector, private sector, and society.</p>
	</section>
	<section class="col" id="vision"><h3>Our Vision</h3>
		<p>To achieve our goal, out company is committed to providing high quality professional services, team capacity building, and expanding mutually beneficial partnership at both regional and global level.</p>
	</section>
	<section class="col" id="value"><h3>Our Value</h3>
		<p>
		We have been in operation since in late 2020. Our current team has 8 ICT proffesionals, and now we want to recruit 3 more members, please see on the <strong>Jobs page</strong>. If you want to join our team, please feel free to contact us on <strong>apply page</strong>.
	</p>
	</section>
</div>
<!--Enhancement2: Modal pop up after 5second-->
<div id="myModal" class="modal">
<form id="subform" action="">
  <div class="subcontainer">
  	<span class="close">&#735;</span>
    <h2>Subscribe to our Newsletter</h2>
    <p>To get notified about most updated new, Subcribe now!</p>
  </div>
  <div class="subcontainer" style="background-color:white">
    <input id="submail" type="text" placeholder="Email address" name="mail" required>
  </div>

  <div class="subcontainer">
    <input id="subscribe" type="submit" value="Subscribe">
  </div>
</form>
</div>
	
<?php include 'footer.inc'; ?>
</article>


</body>
</html>