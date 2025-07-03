<?php
// index.php - Raks Auto Show Homepage

include_once 'includes/header.php';
?>

<!-- === Banner Section with Swiper Slider === -->
<section class="banner swiper">
  <div class="swiper-wrapper">

    <div class="swiper-slide">
      <img src="assets/images/homebg1.jpeg" alt="Slide 1">
      <div class="slide-caption">
        <h2>WELCOME TO <br> TATA | DIMO <br> RAKS AUTO SHOW</h2>
        <p>JAFFNA'S 1st INTERNATIONAL AUTOMOBILE AND AUTO ACCESSORIES EXHIBITION.</p>
      </div>
    </div>

    <div class="swiper-slide">
      <img src="assets/images/homebg2.jpeg" alt="Slide 2">
      <div class="slide-caption">
        <h2>RAKS FIRST ANNUAL AUTO SHOW 2025</h2>
        <p>NORTHERN SRI LANKA'S PREMIER AUTOMOTIVE SHOWCASE</p>
      </div>
    </div>

    <div class="swiper-slide">
      <img src="assets/images/homebg3.jpeg" alt="Slide 3">
      <div class="slide-caption">
        <h2>JOIN THE MOVEMENT</h2>
        <p>BOOK YOUR TICKETS NOW</p>
        <a href="router.php?page=booking" class="btn-slide">BOOK NOW</a>
      </div>
    </div>

  </div>

  <div class="swiper-pagination"></div>
</section>


<!-- === Countdown Timer (Events start in) === -->
<section class="countdown">
    <h2>Events start in:</h2>
    <div id="countdown-timer">
        <div class="countdown-box">
            <div class="countdown-number" id="days">00</div>
            <div class="countdown-label">Days</div>
        </div>
        <div class="countdown-box">
            <div class="countdown-number" id="hours">00</div>
            <div class="countdown-label">Hours</div>
        </div>
        <div class="countdown-box">
            <div class="countdown-number" id="minutes">00</div>
            <div class="countdown-label">Minutes</div>
        </div>
        <div class="countdown-box">
            <div class="countdown-number" id="seconds">00</div>
            <div class="countdown-label">Seconds</div>
        </div>
    </div>
</section>

<!-- <section class="highlights"> -->
<section class="mission">
    <h2>What to Expect</h2>
    <div class="highlight-grid">
        <div class="highlight-card">
            <i class="fas fa-car"></i>
            <h3>Supercar Displays</h3>
            <p>Ferrari, Lamborghini, Rolls-Royce & more!</p>
        </div>
        <div class="highlight-card">
            <i class="fas fa-motorcycle"></i>
            <h3>Motorbike Lottery</h3>
            <p>Win a brand-new bike!</p>
        </div>
        <div class="highlight-card">
            <i class="fas fa-tools"></i>
            <h3>Live Tech Demos</h3>
            <p>Cutting-edge automotive innovations</p>
        </div>
        <div class="highlight-card">
            <i class="fas fa-utensils"></i>
            <h3>Food & Entertainment</h3>
            <p>Fun for the whole family</p>
        </div>
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
