<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve and sanitize form inputs
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Validate inputs
    if (!empty($name) && !empty($email) && !empty($message) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        
        // Admin Email
        $admin_email = "admin@example.com";

        // Email Subject
        $subject = "New Contact Form Submission";

        // Email Body
        $body = "You have received a new message from $name.\n\n".
                "Email: $email\n\n".
                "Message:\n$message";

        // Headers
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";

        // Send Email
        if (mail($admin_email, $subject, $body, $headers)) {
            echo "Thank you, $name! Your message has been sent successfully.";
        } else {
            echo "Sorry, there was a problem sending your message. Please try again later.";
        }
    } else {
        echo "Please fill out all fields correctly.";
    }
} else {
    echo "Invalid request method.";
}
?>
