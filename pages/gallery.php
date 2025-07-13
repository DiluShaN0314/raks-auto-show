<?php
$categories = ['modern', 'vintage', 'bikes'];
$baseDir = "admin/uploads/";
?>

<section class="gallery-banner">
  <div class="gallery-banner-overlay">
    <h1>Gallery Highlights</h1>
    <p>Where horsepower meets elegance — relive the moments</p>
  </div>
</section>

<section class="styled-section gallery-section">
  <div class="gallery-header">
    <h2><span>✨</span> Our Stunning Gallery</h2>
    <p>Experience the thrill, beauty, and highlights of past Raks Auto Shows.</p>
  </div>

  <?php foreach ($categories as $category): ?>
    <?php
      $dir = $baseDir . $category . "/";
      if (!is_dir($dir)) continue; // skip if folder doesn't exist
      $images = array_diff(scandir($dir), ['.', '..']);
    ?>

    <h3 style="text-transform: capitalize; color: #2692e4; margin-top: 50px;"><?= ucfirst($category) ?> Collection</h3>
    <div class="gallery-grid">
      <?php foreach ($images as $img): ?>
        <div class="gallery-item">
          <a href="<?= $dir . $img ?>" data-lightbox="<?= $category ?>-gallery" data-title="<?= ucfirst($category) ?> Ride">
            <img src="<?= $dir . $img ?>" alt="<?= $category ?> Image">
            <div class="glow"></div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  <?php endforeach; ?>
</section>
