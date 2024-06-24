// Wait for the DOM to load
document.addEventListener('DOMContentLoaded', function() {
    // Get references to the elements
    var continueShoppingButton = document.querySelector('.continue-shopping-button');
    var trackOrderButton = document.querySelector('.track-order-button');
    
    // Add event listener to the continue shopping button
    continueShoppingButton.addEventListener('click', function(event) {
      event.preventDefault();
      // Redirect the user to the explore page
      window.location.href = 'home.php';
    });
    
    // Add event listener to the track order button
    trackOrderButton.addEventListener('click', function(event) {
      event.preventDefault();
      // Redirect the user to the tracking.html page
      window.location.href = 'tracking.html';
    });
  });
  