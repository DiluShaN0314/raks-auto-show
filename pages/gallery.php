<?php
$dir = "admin/uploads/";
$images = array_diff(scandir($dir), ['.', '..']);
?>

<section class="styled-section gallery-section">
    <div class="gallery-header">
        <h2><span>✨</span> Our Stunning Gallery</h2>
        <p>Experience the thrill, beauty, and highlights of past Raks Auto Shows.</p>
    </div>

    <div class="gallery-grid">
        <?php foreach ($images as $img): ?>
            <div class="gallery-item">
                <a href="<?= $dir . $img ?>" data-lightbox="raks-gallery" data-title="Raks Auto Show">
                    <img src="<?= $dir . $img ?>" alt="Gallery Image">
                    <div class="glow"></div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</section>
