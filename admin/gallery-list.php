<?php
$dir =  __DIR__ . "/uploads/";
$images = array_diff(scandir($dir), ['.', '..']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Uploaded Gallery</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
    <style>
        .gallery-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }
        .gallery-grid img {
            max-width: 200px;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <h2 style="margin: 170px auto auto auto;">Uploaded Gallery</h2>
    <div class="gallery-grid">
        <?php foreach ($images as $img): ?>
            <div>
                <img src="admin/uploads/<?= $img ?>" alt="Gallery Image">
            </div>
        <?php endforeach; ?>
    </div>
    <p><a href="admin-gallery">← Back to Upload</a></p>
</body>
</html>
