/**/
// Get all dropdown toggle buttons
var dropdownToggleButtons = document.querySelectorAll('.dropdown-toggle');

// Loop through each dropdown toggle button
dropdownToggleButtons.forEach(function(button) {
    // Add event listener for mouseenter event
    button.addEventListener('mouseenter', function() {
        // Open the dropdown menu
        if (!button.classList.contains('show')) {
            button.click();
        }
    });
});