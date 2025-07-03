<?php
$dir = "admin/uploads/";
$images = array_diff(scandir($dir), ['.', '..']);
?>

<section class="styled-section">
    <h2>Gallery</h2>
    <p>Check out some moments from previous Raks Auto Show events.</p>

    <div class="gallery-grid">
        <?php foreach ($images as $img): ?>
            <div>
                <a href="<?= $dir . $img ?>" data-lightbox="raks-gallery" data-title="Raks Auto Show">
                    <img src="<?= $dir . $img ?>" alt="Gallery Image" style="max-width: 250px; border-radius: 10px;">
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</section>
