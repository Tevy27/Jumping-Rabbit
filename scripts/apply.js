/*
Filename: scripts/apply.js
Author: Tevy Tunsay 103139978
Target: apply.html, jobs.html
Date created: 10Sep2021
Date Modified:26Sep2021
*/



"use strict";
/*
//preflled  and clear form 
function validate() {
	var result = true;
	//error tag
	var job_id_error = document.getElementById("job_id_error");
	job_id_error.innerHTML = "";
	var firstName_error = document.getElementById("firstName_error");
	firstName_error.innerHTML = "";
	var lastName_error = document.getElementById("lastName_error");
	lastName_error.innerHTML = "";
	var dob_error = document.getElementById("dob_error");
	dob_error.innerHTML = "";
	var gender_error = document.getElementById("gender_error");
	gender_error.innerHTML = "";
	var address_error = document.getElementById("address_error");
	address_error.innerHTML = "";
	var suburb_error = document.getElementById("suburb_error");
	suburb_error.innerHTML = "";
	var state_error = document.getElementById("state_error");
	state_error.innerHTML = "";
	var postcode_error = document.getElementById("postcode_error");
	postcode_error.innerHTML = "";
	var email_error = document.getElementById("email_error");
	email_error.innerHTML = "";
	var phone_error = document.getElementById("phone_error");
	phone_error.innerHTML = "";
	var skills_error = document.getElementById("skills_error");
	skills_error.innerHTML ="";
	//checking error and show error messgae
	var jobRef = document.getElementById("jobRef").value;
		if (jobRef == "") {
			job_id_error.innerHTML = "Job reference cannot be empty";
			result = false;
		}
	var firstName = document.getElementById("firstName").value;
		if (firstName == "") {
			firstName_error.innerHTML = "Your first name cannot be empty";
			result = false;
		}
		else if (!firstName.match(/^[a-zA-Z]+$/)) {
			firstName_error.innerHTML = "Your first name only contains alpha character.";
			result = false;
		}
		
	var lastName = document.getElementById("lastName").value;
		if (lastName == "") {
			lastName_error.innerHTML = "Your last name cannot be empty";
			result = false;
		}
		else if (!lastName.match(/^[a-zA-Z]+$/)) {
			lastName_error.innerHTML = "Your last name only contains alpha character.";
			result = false;
		}
//calculate date
	var DOB = document.getElementById("DOB").value;
		 if (!(DOB.match(/^([0-2][0-9]|(3)[0-1])(\/)(((0)[0-9])|((1)[0-2]))(\/)\d{4}$/))) {
		 	dob_error.innerHTML = "Date of birth is invalid.";
		 }
         else {
            var age = calculate_age(DOB);
        if (!isFinite(age) || isNaN(age)) {
                dob_error.innerHTML = "Date of birth is invalid.";
                result = false;
            }
            else if (age < 15 || age > 80) {
                dob_error.innerHTML = "Your age must be between 15 and 80";
                result = false;
            }
        function calculate_age(DOB){
            var split = DOB.split('/');
            var birthDate = new Date(split[2], split[1]-1, split[0]);
            var today = new Date();
            var milliDay = 1000*60*60*24
            var ageInDays = (today - birthDate) / milliDay;
            var age = Math.floor(ageInDays/365);
        return age;
            }
        }
	   
	var male = document.getElementById("male").checked;
    var female = document.getElementById("female").checked;
    var other = document.getElementById("other").checked;
    if (!(male || female || other)) {
        gender_error.innerHTML = "Gender cannot be empty";
        result = false;
    }

    var address = document.getElementById("address").value;
    if (address == "") {
        address_error.innerHTML = "Address cannot be empty.";
        result = false;
    }
    var suburb = document.getElementById("suburb").value;
    if (suburb == "") {
        suburb_error.innerHTML = "suburb cannot be empty.";
        result = false;
    } 

	var postcode = document.getElementById("postcode").value;
		if (postcode == "") {
			postcode_error.innerHTML = "Postcode cannot be empty.";
			result = false;
		}
	var state = document.getElementById("state").value;
		if (state == "") {
        	state_error.innerHTML = "State cannot be empty";
        	result = false;
    	}
    	else {
    		var message = validate_postcode(state, postcode);
    			if  (message != ""){
    				state_error.innerHTML = message;
    				result = false;
    			}

    	}
    var aemail = document.getElementById("aemail").value;
    if (aemail == ""){
    	email_error.innerHTML = "Email cannot be empty.";
    	result = false;
    }
    var phoneNum = document.getElementById("phoneNum").value;
    if (phoneNum == ""){
    	phone_error.innerHTML = "Phone Number cannot be empty.";
    	result = false;
    }
	// skill check
    var skill1 = document.getElementById("skill1").checked;
    var skill2 = document.getElementById("skill2").checked;
    var skill3 = document.getElementById("skill3").checked;
    var skill4 = document.getElementById("skill4").checked;
    var skill5 = document.getElementById("skill5").checked;
    var otherskill = document.getElementById("otherskill").checked;
    	if (!(skill1||skill2||skill3||skill4||skill5||otherskill)) {
    		skills_error.innerHTML = "Please select atleast one skill.";
    		result= false;
    	}
    	if (otherskill) {
    		var otherskills = document.getElementById("otherskills").value;
    		if (otherskills =="") {
    			skills_error.innerHTML += "Other skill cannot be empty.";
    			result = false;
    		}
    	}
    if (!result) {
    	document.getElementById("check_error").innerHTML = "Please correct errors before submit.";
    }
    if (result) {
    	storeSubmit(skill1,skill2,skill3,skill4,skill5,otherskill, otherskills, firstName, lastName, DOB, address, suburb, state, postcode, aemail, phoneNum, male, female, other);
    }
    return result;
}
*/

function storeSubmit(skill1,skill2,skill3,skill4,skill5,otherskill, otherskills, firstName,lastName, DOB, address, suburb, state, postcode, aemail, phoneNum, male, female, other){
 //store value in session storage
 	var skill_string = "";
 	if (skill1) {
 		skill_string = "skill1";
 	}
 	if (skill2) {
 		if (skill_string != "") {
            skill_string += ", "
        }
        skill_string += "skill2";
    }
     if (skill3) {
        if (skill_string != "") {
            skill_string += ", "
        }
        skill_string += "skill3";
    }
    if (skill4) {
 		if (skill_string != "") {
            skill_string += ", "
        }
        skill_string += "skill4";
    }
     if (skill5) {
        if (skill_string != "") {
            skill_string += ", "
        }
        skill_string += "skill5";
    }
     if (otherskill) {
        if (skill_string != "") {
            skill_string += ", "
        }
        skill_string += "otherskill";
    }

   sessionStorage.skills = skill_string;
   sessionStorage.firstName = firstName;
   sessionStorage.lastName = lastName;
   sessionStorage.DOB = DOB;
   sessionStorage.address = address;
   sessionStorage.suburb = suburb;
   sessionStorage.state = state;
   sessionStorage.postcode = postcode;
   sessionStorage.aemail = aemail;
   sessionStorage.phoneNum = phoneNum;
   sessionStorage.otherskills = otherskills;
   if (male) {
   	sessionStorage.gender ="male";
   }
   else if (female){
   	sessionStorage.gender ="female";
   }
   else if (other){
   	sessionStorage.gender ="other";
   }
}

// Check that the postcode matches the state
/*
function validate_postcode(state,postcode) {
	var errorMsg = "";
	var result = true;

    function postcodeMatch(n1, n2) {
        if (!n2) {
            var argRegEx = new RegExp("^[" + n1 + "]\\d{3}");
            if (!postcode.match(argRegEx)) {
                errorMsg = errorMsg + "Your postcode is incorrect\n";
                result = false;
            }
        } else {
            var argRegEx = new RegExp("^[" + n1 + "|" + n2 + "]\\d{3}");
            if (!postcode.match(argRegEx)) {
                errorMsg = errorMsg + "Your postcode is incorrect\n";
                result = false;
            }
        }
    }

    switch (state) {
        case "VIC":
            postcodeMatch(3, 8);
            break;
        case "NSW":
            postcodeMatch(1, 2);
            break;
        case "QLD":
            postcodeMatch(4, 9);
            break;
        case "NT":
            postcodeMatch(0);
            break;
        case "WA":
            postcodeMatch(6);
            break;
        case "SA":
            postcodeMatch(5);
            break;
        case  "TAS":
            postcodeMatch(7);
            break;
        case  "ACT":
            postcodeMatch(0);
            break;
        default:
            errorMsg = errorMsg + "Your postcode is incorrect\n";
    }
    return errorMsg;
}
*/

// Pre fill local storage
function prefill_id() {
	var jobId_input = document.getElementById("jobRef");
	if (localStorage.jobId != undefined) {
		jobId_input.value = localStorage.jobId;
		jobId_input.readOnly = true;
	}
	else {
		jobId_input.readOnly = false;
	}
}

function prefill_form() {
    prefill_id();
    if (sessionStorage.firstName != undefined) {
        document.getElementById("firstName").value = sessionStorage.firstName;
        document.getElementById("lastName").value = sessionStorage.lastName;
        document.getElementById("DOB").value = sessionStorage.DOB;
        document.getElementById("address").value = sessionStorage.address;
        document.getElementById("suburb").value = sessionStorage.suburb;
        document.getElementById("state").value = sessionStorage.state;
        document.getElementById("postcode").value = sessionStorage.postcode;
        document.getElementById("aemail").value = sessionStorage.aemail;
        document.getElementById("phoneNum").value = sessionStorage.phone;

        switch (sessionStorage.gender) {
            case "male":
                document.getElementById("male").checked = true;
                break;
            case "female":
                document.getElementById("female").checked = true;
                break;
            case "other":
                document.getElementById("other").checked = true;
                break;
        }
        var skills = sessionStorage.skills;
        document.getElementById("skill1").checked = skills.includes("skill1");
        document.getElementById("skill2").checked = skills.includes("skill2");
        document.getElementById("skill3").checked = skills.includes("skill3");
        document.getElementById("skill4").checked = skills.includes("skill4");
        document.getElementById("skill5").checked = skills.includes("skill5");
        document.getElementById("otherskill").checked = skills.includes("otherskill");
    }
}

//StoreJobId
function storeJob1() {
	localStorage.jobId = document.getElementById("job1_id").innerHTML;
}
function storeJob2() {
	localStorage.jobId = document.getElementById("job2_id").innerHTML;
}

function init(){
	if (document.title == "JRT-jobs")
	{
		document.getElementById("job1_apply").onclick = storeJob1;
		document.getElementById("job2_apply").onclick = storeJob2;
	}
	else if (document.title == "JRT-apply") {
		prefill_form();
		document.getElementById("aform").onsubmit = validate;
		document.getElementById("aform").onreset = function () {
			localStorage.clear();
			prefill_id();
		}
	}
}
window.onload = init;