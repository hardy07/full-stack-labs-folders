// validation.js
function validateForm() {
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const age = document.getElementById('age').value;
    const message = document.getElementById('formMessage');

    if (!name || !email || !age) {
        message.textContent = "All fields are required.";
        message.style.color = 'red';
        return;
    }

    if (age < 1) {
        message.textContent = "Age must be greater than 0.";
        message.style.color = 'red';
        return;
    }

    message.textContent = "Registration successful.";
    message.style.color = 'green';
}
