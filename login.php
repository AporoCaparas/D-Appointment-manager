<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="logincss.css">
    <script src="login.js" defer></script>
    <title>Login Page</title>
</head>
<body>

    <!-- Navigation link to the home page -->
    <a href="frontpage.php" class="home-link">Back to Home Page</a>

    <div class="container">
        <h2>Login</h2>
        <div class="input-box">
            <input type="text" id="username" placeholder="Username">
            <div id="username-error" class="error-message"></div>
        </div>
        <div class="input-box">
            <input type="password" id="password" placeholder="Password">
            <div id="password-error" class="error-message"></div>
        </div>
        <button onclick="login()">Login</button>
        
        <!-- New link added for registration -->
        <a href="register.php" class="register-link">Don't have an account? Create here!</a>

        <!-- Error message display for empty fields -->
        <div id="error-message"></div>

        <div class="register-form">
            <div class="input-box">
                <input type="password" id="confirmPassword" placeholder="Confirm Password">
                <div id="confirmPassword-error" class="error-message"></div>
            </div>
            <button onclick="register()">Register</button>
        </div>
    </div>

    <!-- GIF Input -->
    <input type="file" accept="clocky.gif" id="gifInput" style="display: none;" />
    
<script>
function login() {
    var usernameInput = document.getElementById("username");
    var passwordInput = document.getElementById("password");
    var errorMessage = document.getElementById("error-message");

    // Check if username is empty
    if (!usernameInput.value.trim()) {
        document.getElementById("username-error").textContent = "Input the correct username";
        document.getElementById("username-error").style.color = "red";
    } else {
        document.getElementById("username-error").textContent = "";
    }

    // Check if password is empty
    if (!passwordInput.value.trim()) {
        document.getElementById("password-error").textContent = "Input the correct password";
        document.getElementById("password-error").style.color = "red";
    } else {
        document.getElementById("password-error").textContent = "";

        // Clear previous error messages
        errorMessage.textContent = "";
        errorMessage.style.color = "";

        // Your login logic here
        var username = usernameInput.value;
        var password = passwordInput.value;

        console.log("Login clicked!");
        console.log("Username: " + username);
        console.log("Password: " + password);

        // Check if login is successful (you might have your own logic here)
        var loginSuccessful = true;

        if (loginSuccessful) {
            // Redirect to Mytmhl.html
            window.location.href = "Mytmhl.php";
        } else {
            // Display error message for unsuccessful login
            errorMessage.textContent = "Invalid username or password";
            errorMessage.style.color = "red";
        }
    }
}

function toggleRegisterForm() {
    var registerForm = document.querySelector('.register-form');
    registerForm.classList.toggle('show-register');
}

function register() {
    var usernameInput = document.getElementById("username");
    var passwordInput = document.getElementById("password");
    var confirmPasswordInput = document.getElementById("confirmPassword");

    // Check if username is empty
    if (!usernameInput.value.trim()) {
        document.getElementById("username-error").textContent = "Input the correct username";
        document.getElementById("username-error").style.color = "red";
    } else {
        document.getElementById("username-error").textContent = "";
    }

    // Check if password is empty
    if (!passwordInput.value.trim()) {
        document.getElementById("password-error").textContent = "Input the correct password";
        document.getElementById("password-error").style.color = "red";
    } else {
        document.getElementById("password-error").textContent = "";
    }

    // Check if confirm password is empty
    if (!confirmPasswordInput.value.trim()) {
        document.getElementById("confirmPassword-error").textContent = "Confirm your password";
        document.getElementById("confirmPassword-error").style.color = "red";
    } else {
        document.getElementById("confirmPassword-error").textContent = "";
    }

    // Your registration logic here
    var username = usernameInput.value;
    var password = passwordInput.value;
    var confirmPassword = confirmPasswordInput.value;

    console.log("Register clicked!");
    console.log("Username: " + username);
    console.log("Password: " + password);
    console.log("Confirm Password: " + confirmPassword);
}
</script>
</body>
</html>