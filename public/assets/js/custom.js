// Create the autocomplete object
const autocompleteInput = document.getElementById('autocomplete-input');
const autocomplete = new google.maps.places.Autocomplete(autocompleteInput);

// Set the fields to retrieve (optional)
autocomplete.setFields(['address_components', 'formatted_address', 'geometry']);

// Listen for place selection event
autocomplete.addListener('place_changed', () => {
    const place = autocomplete.getPlace();

    // Store the selected place details in session or cookie
    sessionStorage.setItem('selectedPlace', JSON.stringify(place));
});

// Get the input field
var input = document.getElementById("autocomplete-input");

// Execute a function when the user presses a key on the keyboard
input.addEventListener("keypress", function (event) {
    // If the user presses the "Enter" key on the keyboard
    if (event.key === "Enter") {
        // Cancel the default action, if needed
        event.preventDefault();
        // Trigger the button element with a click
        document.getElementById("myBtn").click();
    }
});

function scrollToButton()
{
    window.scrollTo({
        document.body.scrollHeight,
        behavior: 'smooth'
    })
}
