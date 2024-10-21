<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the email from the form
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);

    // Validate the email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Process the email (e.g., save to database or send confirmation)
        
        // For demonstration, we'll just echo it (replace this with actual logic)
        echo "Thank you for subscribing with email: " . $email;
    } else {
        echo "Invalid email format.";
    }
}