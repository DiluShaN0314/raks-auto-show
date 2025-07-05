<?php
// includes/header.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Raks Auto Show</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- JS -->
    <script src="assets/js/main.js" defer></script>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Favicon -->
    <link rel="icon" href="assets/images/TATA-Raks-auto-show-300x300-1.png" type="image/x-icon">
    <!-- Lightbox CSS -->
    <link href="https://cdn.jsdelivr.net/npm/lightbox2@2/dist/css/lightbox.min.css" rel="stylesheet">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


</head>
<body>

<!-- === Header Section === -->
<header class="site-header">
    <div class="container">
        <a href="home" class="logo">
            <img src="assets/images/TATA-Raks-auto-show-with-out-BG.png" alt="Raks Auto Show Logo" height="90">
            <img src="assets/images/TATA-Raks-auto-show-Website-icon.png" alt="Raks Auto Show Logo" height="50">
        </a>
        <?php $currentPage = $_GET['page'] ?? 'home'; ?>
        <button id="toggle-dark-mode">🌙 Toggle Dark Mode</button>
        <nav class="navbar">
            <a href="home" class="<?= ($currentPage == 'home') ? 'active' : '' ?>">Home</a>
            <a href="about" class="<?= ($currentPage == 'about') ? 'active' : '' ?>">About</a>
            <a href="exhibitors" class="<?= ($currentPage == 'exhibitors') ? 'active' : '' ?>">Exhibitors</a>
            <a href="gallery" class="<?= ($currentPage == 'gallery') ? 'active' : '' ?>">Gallery</a>
            <a href="contact" class="<?= ($currentPage == 'contact') ? 'active' : '' ?>">Contact</a>
            <a href="booking" class="book-now-button">
        <span class="button-text">Book Tickets</span>

    </a>
        </nav>
        <div class="hamburger" id="hamburger">
        <span>
        </span>
        <span></span>
        <span></span>
        </div>

    </div>
</header>

