<!-- contact.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="assets/css/box.css">
</head>

<body>
    <div class="contact-container">
        <h1>Contact Us</h1>
        <p>If you have any questions or inquiries, feel free to reach out to us using the form below.</p>

        <!-- Form that sends data to submit-contact.php -->
        <form action="#" method="post" class="contact-form">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" placeholder="Write your message here" required></textarea>

            <button type="submit" class="submit-btn">Send Message</button>
        </form>
    </div>
</body>
</html>
