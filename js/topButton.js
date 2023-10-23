// Get the "Back to Top" button by its ID
let topButton = document.getElementById("top");

// Add a scroll event
window.addEventListener("scroll", function () {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    topButton.style.display = "block"; // Show the button when scrolling down
  } else {
    topButton.style.display = "none"; // Hide the button when at the top
  }
});

// Add a click event to scroll back to the top when the button is clicked
topButton.addEventListener("click", function () {
  document.body.scrollTop = 0; // For web browsers
  document.documentElement.scrollTop = 0; // For Internet Explorer
});