// Wait for the DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
    // Add event listeners to the buttons
    var signOutButton = document.querySelector('.sign-out-button');
    signOutButton.addEventListener('click', function(event) {
      // Perform sign out functionality
    
      window.location.href = 'login.php';
    });
  
    var confirmButton = document.querySelector('.create-samples-button');
    confirmButton.addEventListener('click', function(event) {
      // Perform confirm functionality

      window.location.href = 'contract.html';
    });
  
    var addToCartButton = document.querySelector('.add-to-cart-button');
    addToCartButton.addEventListener('click', function(event) {
      // Perform add to cart functionality

      alert('Product added to cart!');
    });
  
    var seeMoreButton = document.querySelector('.see-more-button button');
    seeMoreButton.addEventListener('click', function(event) {
      // Perform see more functionality
      alert('See more button clicked!');
    });
  });
  