/*date time*/
function updateClock() {
    var now = new Date(); // Get current date and time
    var date = now.toDateString(); // Get date component
    var time = now.toLocaleTimeString(); // Get time component
    var dateTime = date + ' ' + time; // Combine date and time

    
    var clock = document.getElementById('clock'); // Update the clock display
  
    if(clock) {
        clock.innerText = dateTime;
    }
}

// Update the clock every second
setInterval(updateClock, 1000);

// Initial call to display clock immediately
updateClock();

/*Get country location*/
function getCountry() {
    var country = document.getElementById('country');
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;

            // Call reverse geocoding API to get country
            fetch(`https://api.bigdatacloud.net/data/reverse-geocode-client?latitude=${latitude}&longitude=${longitude}&localityLanguage=en`)
            .then(response => response.json())
            .then(data => {
                if(country){
                    country.innerText = data.countryName;
                }
            })
            .catch(error => console.error('Error:', error));
        });
    } else {
        if(country){
            country.innerText = "Geolocation is not supported by this browser.";
        }
    }
}

// Call getCountry function
getCountry();