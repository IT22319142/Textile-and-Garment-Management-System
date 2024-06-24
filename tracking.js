// Wait for the DOM to load
document.addEventListener('DOMContentLoaded', function() {
    // Get reference to the view invoice button
    var viewInvoiceButton = document.querySelector('.view-invoice-button');
    
    // Add event listener to the view invoice button
    viewInvoiceButton.addEventListener('click', function(event) {
      event.preventDefault();
      // Redirect the user to the Invoice.html page
      window.location.href = 'Invoice.html';
    });
  });
  