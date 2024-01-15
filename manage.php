
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <?php include 'header.inc' ?>
    <title>Manage EOI's</title>
</head>
<body>
            <?php include 'menu.inc'; ?>
<?php
session_start();
if (!isset($_SESSION['login_username'])) {
    header("location:manager_login.php");           //redirect
}

?>
<form action="manager_logout.php" method="post"> 
            <input class="button" id="logout" type="submit" value="Logout" >
    </form>
                <h2>Search Applicant</h2>
                <!-- Search for EOI's-->

                <form method="post" action="manage.php">
                    <fieldset>
                        <legend>Leave BLANK to Display ALL!</legend>
                        <p> <label for="eoinumber">EOI Number: </label>
                            <input type="text" name="eoinumber" id="eoinumber" /></p>
                        <p> <label for="jobref">Job ID: </label>
                            <input type="text" name="jobref" id="jobref" /></p>
                        <p> <label for="firstname">Given Name: </label>
                            <input type="text" name="firstname" id="firstname" /></p>
                        <p> <label for="lastname">Family Name: </label>
                            <input type="text" name="lastname" id="lastname" /></p>
                        <p>
                            <label for="order">Order Results By</label>
                            <select name="order" id="order">
                                <option hidden="hidden" value="">Select field...</option>
                                <option value="jobref">Job ID</option>
                                <option value="firstname">Given Name</option>
                                <option value="lastname">Family Nsame</option>
                                <option value="dob">Date of Birth</option>
                                <option value="gender">Gender</option>
                                <option value="address">Address</option>
                                <option value="suburb">Suburb</option>
                                <option value="state">State or Territory</option>
                                <option value="postcode">Post Code</option>
                                <option value="email">Email</option>
                                <option value="phone">Phone</option>
                                <option value="app_date">Date</option>
                                <option value="appstatus">Application Status</option>
                            </select>
                        </p>
                    </fieldset>
                    <input class="button" type="submit" value="Search" name="Search" />
                </form>
                <hr />
                <?php
                // Check if this form was submitted
                if (!empty($_POST["Search"])) {
                    if (
                        // check if the data is empty
                        isset($_POST["eoinumber"]) || isset($_POST["jobref"]) ||
                        isset($_POST["firstname"]) || isset($_POST["lastname"])
                    ) {

                        /**
                         * Sanitised the input data
                         * @return sanitised data
                         */
                        function sanitise_input($data)
                        {
                            $data = trim($data);
                            $data = stripslashes($data);
                            $data = htmlspecialchars($data);
                            return $data;
                        }
                        //set variables
                        $eoinumber  = sanitise_input($_POST["eoinumber"]);
                        $jobref       = sanitise_input($_POST["jobref"]);
                        $firstname  = sanitise_input($_POST["firstname"]);
                        $lastname = sanitise_input($_POST["lastname"]);
                        $order       = sanitise_input($_POST["order"]);
                        // import settings
                        require_once('settings.php');
                        $conn = @mysqli_connect(
                            $host,
                            $user,
                            $pwd,
                            $sql_db
                        );

                        // Checks if connection is successful
                        if (!$conn) {
                            // Displays an error message
                            echo "<p>Database connection failure</p>";
                        } else {
                            // Upon successful connection

                            $sql_table = "eoi";
                            // define search conditions
                            $conditions = "";
                            if ($eoinumber != "") {
                                if ($conditions != "") {
                                    $conditions .= "AND ";
                                }
                                $conditions .= "eoinumber LIKE '$eoinumber'";
                            }
                            if ($jobref != "") {
                                if ($conditions != "") {
                                    $conditions .= "AND ";
                                }
                                $conditions .= "jobref LIKE '$jobref'";
                            }
                            if ($firstname != "") {
                                if ($conditions != "") {
                                    $conditions .= "AND ";
                                }
                                $conditions .= "firstname LIKE '$firstname%'";
                            }
                            if ($lastname != "") {
                                if ($conditions != "") {
                                    $conditions .= "AND ";
                                }
                                $conditions .= "lastname LIKE '$lastname%'";
                            }
                            if ($conditions != "") {
                                $conditions = " WHERE " . $conditions;
                            }
                            // oder the table by a specific field
                            if ($order != "") {
                                $order = " ORDER BY " . $order;
                            }
                            // Set up the SQL command to add the data into the table
                            $query = "SELECT * FROM $sql_table" . $conditions . $order;
                            // execute the query and store result into the result pointer
                            $result = @mysqli_query($conn, $query);

                            // checks if the execuion was successful
                            if (!$result) {
                                echo "<p>Database cannot be accessed.</p>";
                            } else {
                                if (@mysqli_num_rows($result) > 0) {
                                    // Display the retrieved records
                                    echo "<div class=\"search-table-outer\">";
                                    echo "<table border='1'>";
                                    echo "<tr>\n"
                                        . "<th scope=\"col\">EOI Number</th>\n"
                                        . "<th scope=\"col\">job ID</th>\n"
                                        . "<th scope=\"col\">Given Name</th>\n"
                                        . "<th scope=\"col\">Family Name</th>\n"
                                        . "<th scope=\"col\">DoB (Y-M-D)</th>\n"
                                        . "<th scope=\"col\">Gender</th>\n"
                                        . "<th scope=\"col\">Address</th>\n"
                                        . "<th scope=\"col\">Suburb</th>\n"
                                        . "<th scope=\"col\">State/Territory</th>\n"
                                        . "<th scope=\"col\">Post Code</th>\n"
                                        . "<th scope=\"col\">Email</th>\n"
                                        . "<th scope=\"col\">Phone Number</th>\n"
                                        . "<th scope=\"col\">Skills</th>\n"
                                        . "<th scope=\"col\">Other Skills</th>\n"
                                        . "<th scope=\"col\">Date Applied</th>\n"
                                        . "<th scope=\"col\">App Status</th>\n"
                                        . "</tr>\n";
                                    // retrieve current record pointed by the result pointer

                                    while ($row = @mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        echo "<td>", $row["eoinumber"], "</td>";
                                        echo "<td>", $row["jobref"], "</td>";
                                        echo "<td>", $row["firstname"], "</td>";
                                        echo "<td>", $row["lastname"], "</td>";
                                        echo "<td>", $row["dob"], "</td>";
                                        echo "<td>", $row["gender"], "</td>";
                                        echo "<td>", $row["address"], "</td>";
                                        echo "<td>", $row["suburb"], "</td>";
                                        echo "<td>", $row["state"], "</td>";
                                        echo "<td>", $row["postcode"], "</td>";
                                        echo "<td>", $row["email"], "</td>";
                                        echo "<td>", $row["phone"], "</td>";
                                        echo "<td>", $row["skills"], "</td>";
                                        echo "<td>", $row["otherskills"], "</td>";
                                        echo "<td>", $row["app_date"];
                                        echo "<td>", $row["appstatus"], "</td>";
                                        echo "</tr>";
                                    }
                                    echo "</table>";
                                    echo "</div>";
                                    // Frees up the memory, after using the result pointer
                                    @mysqli_free_result($result);
                                } // if successful query operation
                            } // end if no rows
                            // close the database connection
                            @mysqli_close($conn);
                        } // if successful database connection
                    } // if data posted
                }
                ?>
                <hr />
                <h2>Update EOI Status</h2>
                <!-- Update the status of an EOI, can only choose New, Current or Final -->
                <form class="container" id="apply_form" method="post" action="manage.php">
                    <fieldset>
                        <legend>Update the status of an EOI</legend>
                        <p>
                            <label for="eoinumber2">EOI Number:</label>

                            <input type="text" name="eoinumber" id="eoinumber2" pattern="^[0-9]+$" required="required" />
                        </p>
                        <p>
                            <label for="appstatus">Application Status</label>
                            <select name="appstatus" id="appstatus">
                                <option hidden="hidden" value="">Select Status...</option>
                                <option value="New">New</option>
                                <option value="Current">Current</option>
                                <option value="Final">Final</option>
                            </select>
                        </p>
                    </fieldset>
                    <input class="button" type="submit" value="Update" name="Update" />
                </form>
                <hr />
                <?php
                // Checks if this form was submitted
                if (!empty($_POST["Update"])) {
                    // import settings and connect to database
                    require_once('settings.php');
                    $conn = @mysqli_connect(
                        $host,
                        $user,
                        $pwd,
                        $sql_db
                    );

                    // Checks if connection is successful
                    if (!$conn) {
                        // Displays an error message
                        echo "<p>Database connection failure</p>"; // Might not show in a production script 
                    } else {
                        // Upon successful connection

                        $sql_table = "eoi";
                        // define variables
                        $appstatus = trim(stripslashes(htmlspecialchars($_POST["appstatus"])));
                        if ((strpos($appstatus, 'New') !== false) && (strpos($appstatus, 'Current') !== false) && (strpos($appstatus, 'Final') !== false)) {
                            $appstatus = "New";
                        }
                        $eoinumber = trim(stripslashes(htmlspecialchars($_POST["eoinumber"])));

                        // Set up the SQL command to add the data into the table
                        $query = "UPDATE $sql_table SET appstatus='$appstatus' WHERE eoinumber='$eoinumber'";

                        // execute the query and store result into the result pointer
                        $result = @mysqli_query($conn, $query);

                        // checks if the execuion was successful
                        if (!$result) {
                            echo "<p>Something is wrong with ", $query, "</p>";
                        } else {
                            echo "<p>Successfully updated " . @mysqli_affected_rows($conn) . " EOI</p>";
                        } // if successful query operation
                        // close the database connection
                        @mysqli_close($conn);
                    } // if successful database connection
                }
                ?>
                <hr />
                <h2>Delete Job</h2>
                <!-- Delete a complete job from the database -->
                <form action="manage.php" method="POST">
                    <fieldset>
                        <legend>Delete all EOI's for a specific Job ID:</legend>
                        <p>
                            <label for="jobid2">Enter Job ID</label>
                            <input type="text" name="jobref" id="jobid2" />
                        </p>
                    </fieldset>
                    <input class="button" type="submit" value="Delete" name="Delete" />
                </form>
                <hr />
                <?php
                // check if this form was submitted
                if (!empty($_POST["Delete"])) {
                    // import settings and connet to database
                    require_once('settings.php');
                    $conn = @mysqli_connect(
                        $host,
                        $user,
                        $pwd,
                        $sql_db
                    );
                    // Checks if connection is successful
                    if (!$conn) {
                        // Displays an error message
                        echo "<p>Database connection failure</p>"; // Might not show in a production script 
                    } else {
                        // Upon successful connection
                        $sql_table = "vipmembers";
                        $jobref = trim(stripslashes(htmlspecialchars($_POST["jobref"])));

                        // Set up the SQL command to add the data into the table
                        $query = "DELETE FROM eoi WHERE jobref='$jobref'";

                        // execute the query and store result into the result pointer
                        $result = @mysqli_query($conn, $query);

                        // checks if the execuion was successful
                        if (!$result) {
                            echo "<p>Something is wrong with ",    $query, "</p>";
                        } else {
                            echo "<p>Successfully deleted " . @mysqli_affected_rows($conn) . " EOI(s)</p>";
                            // close the database connection
                            @mysqli_close($conn);
                        }
                    } // if successful database connection
                } // if null string
                ?>
                <hr />
            <?php include 'footer.inc'; ?>
</body>

</html>