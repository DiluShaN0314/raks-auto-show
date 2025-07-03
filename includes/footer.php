<?php
// includes/footer.php
?>

<!-- === Footer Section === -->
<footer class="site-footer">
    <div class="container">

        <div class="footer-columns">

            <!-- Partners -->
            <?php include 'sections/partners.php'; ?>

            <!-- Contact Info -->
            <div class="footer-box">
                <h3>Contact Us</h3>
                <p>Email: <a href="mailto:raksautoshow@gmail.com">raksautoshow@gmail.com</a></p>
                <p>Phone: <a href="tel:+94771234567">+94 77 123 4567</a></p>
                <p>Address: Colombo, Sri Lanka</p>
            </div>

            <!-- Social Media -->
            <div class="footer-box">
                <h3>Join Us</h3>
                <div class="social-icons">
                     <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
                    <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="footer-box">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="home">Home</a></li>
                    <li><a href="about">About</a></li>
                    <li><a href="gallery">Gallery</a></li>
                    <li><a href="contact">Contact</a></li>
                </ul>
            </div>

        </div>

        <div class="copyright">
            <p>&copy; <?php echo date('Y'); ?> Raks Auto Show. All rights reserved.</p>
        </div>
    </div>
</footer>

</body>
<!-- Lightbox JS -->
<script src="https://cdn.jsdelivr.net/npm/lightbox2@2/dist/js/lightbox-plus-jquery.min.js"></script>

</html>
