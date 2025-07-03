<?php
// router.php

// Include common header
include_once 'includes/header.php';

// Get the requested page
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Sanitize input (prevent directory traversal)
$allowed_pages = [
    'home'        => 'index.php',
    'about'       => 'pages/about.php',
    'exhibitors'  => 'pages/exhibitors.php',
    'gallery'     => 'pages/gallery.php',
    'contact'     => 'pages/contact.php',

    // Admin routes (optional)
    'admin-dash'             => 'admin/index.php',
    'admin-gallery'     => 'admin/gallery-upload.php',
    'admin-gallery-view'=> 'admin/gallery-list.php'
];


// Check if page is valid
if (array_key_exists($page, $allowed_pages)) {
    include $allowed_pages[$page];
} else {
    echo "<h2 style='text-align:center;'>404 - Page not found</h2>";
}

// Include common footer
include_once 'includes/footer.php';
?>
