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
    $alertClass = $sent ? "success" : "error";

    $alert = $sent ? "✅ Message sent successfully!" : "❌ Message failed. Try again.";
}
?>

<section class="contact-form-section">
  <h2>Get in Touch</h2>

  <?php if (isset($alert)) echo "<p class='form-alert $alertClass'>$alert</p>";?>

  <form method="POST" action="router.php?page=contact" class="contact-form">
    <div class="form-group">
      <input type="text" name="name" required>
      <label>Name</label>
    </div>

    <div class="form-group">
      <input type="email" name="email" required>
      <label>Email</label>
    </div>

    <div class="form-group">
      <textarea name="message" rows="5" required></textarea>
      <label>Message</label>
    </div>

    <button type="submit" class="form-btn">Send Message</button>
  </form>
</section>


