document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    const responseMessage = document.getElementById('responseMessage');

    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission

        const formData = new FormData(form);

        fetch('submit_form.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            // Clear previous message
            responseMessage.textContent = '';
            responseMessage.className = ''; // Remove all classes

            if (data.status === 'success') {
                responseMessage.textContent = data.message;
                responseMessage.classList.add('success');
            } else {
                responseMessage.textContent = data.message;
                responseMessage.classList.add('error');
            }
        })
        .catch(error => {
            responseMessage.textContent = 'An error occurred. Please try again.';
            responseMessage.className = 'error';
        });
    });
});
