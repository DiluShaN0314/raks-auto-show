<?php
// index.php - Raks Auto Show Homepage
include_once 'includes/header.php';
?>

<!-- === Banner Section with Swiper Slider === -->
<section class="banner swiper">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <img src="assets/images/homebg1.jpeg" alt="Slide 1">
    </div>
    <div class="swiper-slide">
      <img src="assets/images/homebg2.jpeg" alt="Slide 2">
    </div>
    <div class="swiper-slide">
      <img src="assets/images/homebg3.jpeg" alt="Slide 3">
    </div>
  </div>

  <!-- Static Text Caption -->
  <div class="slide-caption">
    <h2>WELCOME TO <br>DIMO <br> TATA MOTORS RAKS AUTO SHOW - 2025</h2>
    <p>JAFFNA'S 1st INTERNATIONAL AUTOMOBILE AND AUTO ACCESSORIES EXHIBITION.</p>
  </div>

  <div class="swiper-pagination"></div>
</section>



<!-- === Countdown Timer (Events start in) === -->
<section class="countdown-section">
    <h2 class="countdown-heading"><b>Event Starts In</b> </h2>
    <div class="countdown-container">
        <div class="countdown-box">
            <div class="countdown-number" id="days">00</div>
            <span class="countdown-separator">:</span>
            <div class="countdown-label">Days</div>
        </div>
        <div class="countdown-box">
            <div class="countdown-number" id="hours">00</div>
            <span class="countdown-separator">:</span>
            <div class="countdown-label">Hours</div>
        </div>
        <div class="countdown-box">
            <div class="countdown-number" id="minutes">00</div>
            <span class="countdown-separator">:</span>
            <div class="countdown-label">Minutes</div>
        </div>
        <div class="countdown-box">
            <div class="countdown-number" id="seconds">00</div>
            <div class="countdown-label">Seconds</div>
        </div>
    </div>
    <div class="countdown-progress">
        <div class="progress-bar"></div>
    </div>
</section>

<section class="our-story animate-section">
    <div class="story-content slide-in">
        <div class="section-header">
            <span class="section-tag">About Us</span>
            <h2>Our <span class="highlight">Story</span></h2>
            <div class="divider"></div>
        </div>

        <div class="story-card">
            <div class="icon-box">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#2692e4" width="24" height="24">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.31-8.86c-1.77-.45-2.34-.94-2.34-1.67 0-.84.79-1.43 2.1-1.43 1.38 0 1.9.66 1.94 1.64h1.71c-.05-1.34-.87-2.57-2.49-2.97V5H10.9v1.69c-1.51.32-2.72 1.3-2.72 2.81 0 1.79 1.49 2.69 3.66 3.21 1.95.46 2.34 1.15 2.34 1.87 0 .53-.39 1.39-2.1 1.39-1.6 0-2.23-.72-2.32-1.64H8.04c.1 1.7 1.36 2.66 2.86 2.97V19h2.34v-1.67c1.52-.29 2.72-1.16 2.73-2.77-.01-2.2-1.9-2.96-3.66-3.42z"/>
                </svg>
            </div>
            <p>
                Raks Engineering and Technologies Pvt Ltd, the organizer of Raks Auto Show 2025, is a leading name in Jaffna's automotive industry. From premium car detailing at Raks Car Wash to hosting this landmark event, we are committed to driving innovation and excellence.
            </p>
        </div>

        <div class="story-card">
            <div class="icon-box">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#2692e4" width="24" height="24">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4 8-8z"/>
                </svg>
            </div>
            <p>
                The Raks Auto Show 2025 is the first of its kind in Northern Sri Lanka, bringing together car enthusiasts, industry leaders, and families for an unforgettable experience.
            </p>
        </div>
        <a href="about">
            <button class="cta-button">
                Learn More About Us
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="20" height="20">
                    <path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/>
                </svg>
            </button>
        </a>
    </div>

    <div class="story-image slide-in">
        <div class="image-frame">
            <img src="assets/images/our.png" alt="Raks Team">

            <div class="image-overlay">
                <span>Since 2025</span>
                <h3>Pioneering Automotive Excellence</h3>
            </div>
        </div>
    </div>

      <!-- Racing car overlay -->
    <div class="car-overlay">
        <img src="assets/images/blue_run.png" alt="Racing Car" class="racing-car">
    </div>
</section>
<!-- <section class="highlights"> -->
<section class="mission">
    <h2>What to Expect</h2>
    <div class="highlight-grid">
        <div class="highlight-card">
            <i class="fas fa-car"></i>
            <h3>The Ultimate Auto Line-Up</h3>
            <p>Explore the latest innovations in cars, bikes, and more — all in one place!</p>
        </div>
        <div class="highlight-card">
            <i class="fas fa-motorcycle"></i>
            <h3>Vintage Vehicle Display</h3>
            <p>Step into the past with a special showcase of classic cars and bikes.</p>
        </div>
        <div class="highlight-card">
            <i class="fas fa-tools"></i>
            <h3>Car Tools Companies</h3>
            <p>"Precision engineered automotive tools for professional mechanics. Built to last, designed for performance—because every turn of the wrench matters."</p>
        </div>
        <div class="highlight-card">
            <i class="fas fa-utensils"></i>
            <h3>Banks,Insurance & Leasing Companies</h3>
            <p>"Powering businesses with tailored financial solutions. From startup loans to corporate treasury services we fuel growth."</p>
        </div>
    </div>
    <a href="exhibitors">
        <button class="cta-button">
            Learn More Exhibitors
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="20" height="20">
                <path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/>
            </svg>
        </button>
    </a>
</section>

<!-- === Contact Preview Section === -->
<section class="contact-preview">
     <div class="headlight-beam left-beam" id="leftBeam"></div>
    <div class="headlight-beam right-beam" id="rightBeam"></div>
    <div class="section-header2" style="text-align: center;">
        <span class="section-tag">Get In Touch</span>
        <h2>Contact <span class="highlight">Us</span></h2>
        <div class="divider2"></div>
    </div>

    <div class="contact-info-box">
        <p><strong>Phone:</strong> +94 77 071 0000</p>
        <p><strong>Email:</strong> info@raks.lk</p>
        <p><strong>Location:</strong> 167/2, Raja Street, kopay, Jaffna, Sri Lanka</p>
        <a href="contact">
            <button class="cta-button">View More Contact Info</button>
        </a>
    </div>
</section>


<!-- === Gallery Preview Section === -->
<section class="gallery-preview">
    <div class="section-header2" style="text-align: center;">
        <span class="section-tag">Event Highlights</span>
        <h2>Photo <span class="highlight">Gallery</span></h2>
        <div class="divider2"></div>
    </div>

    <div class="gallery-thumbnails">
        <img src="admin/uploads/1751446806_WhatsApp%20Image%202025-07-01%20at%2020.37.31_66034f55.jpg" alt="Gallery Image 1">
        <img src="admin/uploads/1751452838_car-1.png" alt="Gallery Image 2">
        <img src="admin/uploads/1751452845_car-2.png" alt="Gallery Image 3">
        
        <!-- Add 2–3 thumbnails only -->
    </div>

    <div style="text-align: center; margin-top: 20px;">
        <a href="gallery">
            <button class="cta-button">View Full Gallery</button>
        </a>
    </div>
</section>


<!-- === Booking Gateway Section === -->
<?php include 'sections/booking-gateway.php'; ?>

<!-- === What to Expect Section === -->
<?php include 'sections/what-to-expect.php'; ?>

<!-- === Events Preview Section === -->
<?php include 'sections/events-preview.php'; ?>

<?php
include_once 'includes/footer.php';
?>
