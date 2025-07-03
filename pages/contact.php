<?php
// Form handler
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to      = "raksautoshow@gmail.com";
    $subject = "New Contact Form Message";
    $body    = "From: $name <$email>\n\n$message";

    $sent = mail($to, $subject, $body);
    $alert = $sent ? "✅ Message sent successfully!" : "❌ Message failed. Try again.";
}
?>

<section class="styled-section">
    <h2>Contact Us</h2>
    <?php if (isset($alert)) echo "<p style='color: green;'>$alert</p>"; ?>

    <form method="POST" action="router.php?page=contact">
        <label>Name:</label>
        <input type="text" name="name" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Message:</label>
        <textarea name="message" rows="5" required></textarea>

        <button type="submit">Send Message</button>
    </form>


</section>

