		<?php
                $active_page = basename($_SERVER['PHP_SELF'], ".php");
                function check_title ($page_title) {
                    global $active_page;
                    if ($page_title == $active_page) {
                        return "class=\"active\"";
                    }
                }
        ?>
            <nav>
			<ul class="nav">
			<li><a <?php check_title("JRT-index") ?> href="index.php">Index</a></li>
			<li><a <?php check_title("JRT-jobs") ?> href="jobs.php">Jobs</a></li>
			<li><a <?php check_title("JRT-apply") ?> href="apply.php">Apply</a></li>
			<li><a <?php check_title("JRT-about") ?> href="about.php">About</a></li>
			<li><a <?php check_title("JRT-Enhancement") ?>href="enhancements.php">Enhancement</a></li>
			<li><a <?php check_title("JRT-enhancement2") ?>href="enhancements2.php">Enhancement2</a></li>
			<li><a href="manage.php">Log In</a></p>
            </ul>
		</nav>