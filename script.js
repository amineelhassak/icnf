document.addEventListener("DOMContentLoaded", function() {
	var registerButton = document.getElementById("registerButton");
	var popup = document.getElementById("popup");
	registerButton.addEventListener("click", function() {
		popup.style.display = "flex";
		document.body.style.overflow = "hidden"; // Disable scrolling
	});
	popup.addEventListener("click", function(event) {
		if (event.target === popup) {
			popup.style.display = "none";
			document.body.style.overflow = ""; // Enable scrolling
		}
	});
});
