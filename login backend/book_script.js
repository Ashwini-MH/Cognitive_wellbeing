document.getElementById('appointment-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

    // Collect form data
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const date = document.getElementById('date').value;
    const therapist = document.getElementById('therapist').value;
    const issue = document.getElementById('issue').value;

    // Simple validation check (you can extend this as needed)
    if(name && email && date && therapist && issue) {
        // Display success message
        const alertBox = document.getElementById('success-alert');
        alertBox.style.display = 'block';

        // Optionally, clear the form after submission
        document.getElementById('appointment-form').reset();
    } else {
        alert('Please fill in all fields.');
    }
});
