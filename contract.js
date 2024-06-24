// Wait for the DOM to load
document.addEventListener('DOMContentLoaded', function() {
    // Get references to the elements
    var depositAmountInput = document.getElementById('deposit-amount');
    var paymentMethodSelect = document.getElementById('payment-method');
    var bankDetailsDiv = document.getElementById('bank-details');
  
    // Add event listener to the payment method select element
    paymentMethodSelect.addEventListener('change', function() {
      // Check if the selected value is "bank-transfer"
      if (paymentMethodSelect.value === 'bank-transfer') {
        // Show the bank details
        bankDetailsDiv.style.display = 'block';
      } else {
        // Hide the bank details
        bankDetailsDiv.style.display = 'none';
      }
    });
  
    // Add event listener to the deposit amount input element
    depositAmountInput.addEventListener('focus', function() {
      // Clear the input value when it is focused
      depositAmountInput.value = '';
    });
  
    depositAmountInput.addEventListener('blur', function() {
      // Restore the original value if the input is empty
      if (depositAmountInput.value === '') {
        depositAmountInput.value = 'Rs.100,000';
      }
    });
  });
  