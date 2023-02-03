const buttons = document.querySelectorAll('.btn-link');

// Add a click event listener to each button
buttons.forEach(button => {
  button.addEventListener('click', function() {
    // Get the parent card element
    const card = this.parentElement.parentElement;

    // Toggle the 'show' class on the card
    card.classList.toggle('show');
  });
});