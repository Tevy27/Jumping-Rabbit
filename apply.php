<!DOCTYPE html>
<html lang="en">
<head>
	<title>JRT-apply</title>
	<?php include 'header.inc'; ?>
	 <script src="scripts/apply.js"></script>
</head>
<body>
	<header>
		<div id="logo"><img src="images/jrt.png" alt="logo" width="80"></div>
		<h1>Jumping Rabbit Technology</h1>
	</header>
		<?php include 'menu.inc'; ?>
	<main>
	<article>
	<form id="aform" method="post" action="processEOI.php" novalidate>
		<h2>Job Application</h2>
		<fieldset class="inputbox">
			<p>
                <span id="job_id_error" class="error"></span>
            </p>
			<p>
				<label for="jobRef">Job reference number</label>
				<input type="text" name="jobref" id="jobRef" size="20" maxlength="5"/>
			</p>
		</fieldset>
		<fieldset>
			<legend>Personal Detail</legend>
			<fieldset class="inputbox">
			<p>
               <span id="firstName_error" class="error"></span>
            </p>
			<p>
				<label for="firstName">First Name</label>
				<input id="firstName" type="text" maxlength="20" size="20" name="firstname" >
			</p>
			<p>
               <span id="lastName_error" class="error"></span>
            </p>
			<p>
				<label for="lastName">Last Name</label>
				<input id="lastName" type="text" maxlength="20" size="20" name="lastname" />
			</p>
			<p>
               <span id="dob_error" class="error"></span>
            </p>
			<p>
				<label for="DOB">Date of birth</label>
				<input id="DOB" placeholder="dd/mm/yyyy" type="date" name="dob"/>
			</p>
			</fieldset>
			<fieldset>
				<legend>Gender</legend>
				<p>
               		<span id="gender_error" class="error"></span>
            	</p>
				<p>
				
				<input id="female" type="radio" name="gender" value="female"/>
				<label for="female">Female</label><br />
				<input id="male" type="radio" name="gender" value="male"/>
				<label for="male">Male</label><br />
				<input id="other" type="radio" name="gender" value="other"/>
				<label for="other">Other</label><br />
			</p>
			</fieldset>
			<fieldset class="inputbox">
				<legend>Address</legend>
				<p>
                    <span id="address_error" class="error"></span>
                </p>
				<p>
				<label for="address">Street Adress</label> 
				<input id="address" type="text" size="20" maxlength="40" name="address"  >
				</p>
				<p>
                    <span id="suburb_error" class="error"></span>
                </p>
				<p>
				<label for="suburb">Suburb/Town</label> 
				<input id="suburb" type="text" size="20" maxlength="40" name="suburb"  >
				</p>
				<p>
                    <span id="state_error" class="error"></span>
                </p>
				<p>
				<label for="state">State</label>
				<select   id="state" name="state">
					<option hidden="hidden">Please select</option>
					<option value="VIC">VIC</option>
                    <option value="NSW">NSW</option>
                    <option value="QLD">QLD</option>
                    <option value="NT">NT</option>
                    <option value="WA">WA</option>
                    <option value="SA">SA</option>
                    <option value="TAS">TAS</option>
                    <option value="ACT">ACT</option>
				</select>
				</p>
				<p>
                    <span id="postcode_error" class="error"></span>
                </p>
				<p><label for="postcode">Postcode</label>
					<input id="postcode" type="text" maxlength= "4" size="4" name="postcode"></p>
			</fieldset>

			<fieldset class="inputbox">
				<legend>Contact</legend>
				<p>
                    <span id="email_error" class="error"></span>
                </p>
				<p><label for="aemail">Email address</label>
				<input id="aemail" type="email" name="email" placeholder="name@domain.com"  ></p>
				<p>
                    <span id="phone_error" class="error"></span>
                </p>
				<p><label for="phoneNum">Phone number</label>
				<input id="phoneNum" type="tel" name="phone" >
				</p>
			</fieldset>
			<fieldset>
                                <legend>Skills</legend>
                                <p>
                                    <span id="skills_error" class="error"></span>
                                </p>
                                <p>
                                    <input type="checkbox" id="coms" name="skills[]" value="coms"/>
                                    <label for="coms">Communication</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="teamwork" name="skills[]" value="teamwork" />
                                    <label for="teamwork">Teamwork</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="problem" name="skills[]" value="problem" />
                                    <label for="problem">Problem solving</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="skill" name="skills[]" value="other" />
                                    <label for="other">Other Skills...</label>
                                </p>
                                <p>
                                    <label id="other_text_label" for="other_text_area">Other Skills</label>
                                </p>
                                <p>
                                    <textarea id="other_text_area" name="other_text" rows="4" cols="40" placeholder="Enter other skills here..."></textarea>
                                </p>
                            </fieldset>
		</fieldset>
		<p>
            <span id="check_error" class="error"></span>
        </p>
		<input class="btn" type="submit" value="Apply">
  		<input class="btn" type="reset" value="Reset">
  	</form>


</article>
</main>
<?php include 'footer.inc'; ?>
</body>
</html>