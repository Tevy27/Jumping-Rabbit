/*
 Filename: enhancements2.js
 Author: Tevy Tunsay 103139978
 Target: jobs.html, index.html
 Created: 20Sep2021
 Last Updated: 26Sep2021
 */

"use strict"; //prevents the creation of global variables in functions
function init() {
  var back_to_top = document.getElementById("back_to_top");
  back_to_top.onclick = backToTop;
 // Get the modal
  var modal = document.getElementById('myModal');

  // get the x button to close the modal
  var close = document.getElementsByClassName("close")[0];
  close.onclick = function () {
    modal.style.display = "none";
  }
  var hide =document.getElementById("subscribe")
  subscribe.onclick = function () {
    modal.style.display = "none";
  }

  // When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
}
function showModal() {
  document.getElementById('myModal').style.display = "block";
}
function hideModal() {
  document.getElementById('myModal').style.display = "none";
}
var futureTime = new Date()
futureTime.setSeconds(futureTime.getSeconds());

/**
 *  wait for a moment before asking the user for assistance
 */
var timeCount = setInterval(function () {

  // Get the current time
  var now = new Date().getTime();

  // Find how long to go
  var waitTime = futureTime - now;

  // when the wait is over 
  if (waitTime < 0) {
    clearInterval(timeCount);
    // promt the user for assitance
    showModal();
  }
}, 1000);
window.onscroll = scrollFunction;
function scrollFunction() {
  if (document.documentElement.scrollTop > 200) {
    document.getElementById("back_to_top").style.display = "block";
  } else {
    document.getElementById("back_to_top").style.display = "none";
  }
}

//when back to top btn clicked
function backToTop() {
  document.documentElement.scrollTop = 0;
}
window.onload = init;



