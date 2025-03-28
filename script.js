function generateCaptcha() {
    const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    let captcha = '';
    for (let i = 0; i < 6; i++) { // Generate a 6-character captcha
        captcha += characters.charAt(Math.floor(Math.random() * characters.length));
    }
    document.getElementById("captchaValue").innerText = captcha;
    return captcha;
}

let generatedCaptcha = generateCaptcha();

document.getElementById("contactForm").addEventListener("submit", function (event) {
    event.preventDefault();

    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const message = document.getElementById("message").value.trim();
    const userCaptcha = document.getElementById("captcha").value.trim();
    let isValid = true;

    // Name validation
    if (name.length < 3) {
        alert("Full Name must be at least 3 characters long.");
        isValid = false;
    }

    // Email validation
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        alert("Please enter a valid email address.");
        isValid = false;
    }

    // Message validation
    if (message === "") {
        alert("Message cannot be empty.");
        isValid = false;
    }

    // Captcha validation
    if (userCaptcha !== generatedCaptcha) {
        alert("Captcha incorrect! Please try again.");
        document.getElementById("captcha").value = "";
        generatedCaptcha = generateCaptcha(); // Regenerate captcha after failure
        isValid = false;
    }

    if (isValid) {
        document.getElementById("popup").style.display = "block";
        this.reset();
        generatedCaptcha = generateCaptcha(); // Regenerate captcha after success
    }
});






