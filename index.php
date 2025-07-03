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
        <h2>Welcome to Raks Auto Show</h2>
        <p>Sri Lanka’s Ultimate Auto Experience</p>
      </div>
    </div>

    <div class="swiper-slide">
      <img src="assets/images/homebg2.jpeg" alt="Slide 2">
      <div class="slide-caption">
        <h2>Exotic Cars. Iconic Brands.</h2>
        <p>Witness Luxury, Innovation & Speed</p>
      </div>
    </div>

    <div class="swiper-slide">
      <img src="assets/images/homebg3.jpeg" alt="Slide 3">
      <div class="slide-caption">
        <h2>Join the Movement</h2>
        <p>Book Your Tickets Now</p>
        <a href="router.php?page=booking" class="btn-slide">Book Now</a>
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


<!-- === Booking Gateway Section === -->
<?php include 'sections/booking-gateway.php'; ?>

<!-- === What to Expect Section === -->
<?php include 'sections/what-to-expect.php'; ?>

<!-- === Events Preview Section === -->
<?php include 'sections/events-preview.php'; ?>

<?php
include_once 'includes/footer.php';
?>
