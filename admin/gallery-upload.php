<?php
// Handle image upload
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['gallery_image'])) {
    $category = $_POST['image_category'] ?? '';
    $allowed_categories = ['modern', 'vintage', 'bikes'];

    if (!in_array($category, $allowed_categories)) {
        $message = "Invalid category selected.";
    } else {
        $targetDir = __DIR__ . "/uploads/$category/";
        if (!file_exists($targetDir)) {
            mkdir($targetDir, 0777, true); // Create directory if it doesn't exist
        }

        $fileName = basename($_FILES["gallery_image"]["name"]);
        $targetFile = $targetDir . time() . "_" . $fileName;

        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $allowed = ['jpg', 'jpeg', 'png', 'gif'];

        if (!in_array($imageFileType, $allowed)) {
            $message = "Only JPG, JPEG, PNG & GIF files are allowed.";
        } elseif ($_FILES["gallery_image"]["size"] > 5 * 1024 * 1024) {
            $message = "Sorry, your file is too large (max 5MB).";
        } elseif (move_uploaded_file($_FILES["gallery_image"]["tmp_name"], $targetFile)) {
            $message = "Image uploaded successfully to <strong>$category</strong>!";
        } else {
            $message = "Error uploading image.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Gallery Upload</title>
    <link rel="stylesheet" href="assets/css/admin.css">
</head>
<body>
    <h2 style="margin: 170px auto auto auto;">Upload Gallery Image</h2>
    <?php if ($message): ?>
        <p style="color:green;"><?= $message ?></p>
    <?php endif; ?>

    <form action="admin-gallery" method="POST" enctype="multipart/form-data">
        <label>Select Image:</label><br>
        <input type="file" name="gallery_image" required><br><br>

        <label>Select Category:</label><br>
        <select name="image_category" required style="width: 250px;">
            <option value="">-- Select Category --</option>
            <option value="modern">Modern</option>
            <option value="vintage">Vintage</option>
            <option value="bikes">Bikes</option>
        </select><br><br>

        <button type="submit">Upload</button>
    </form>

    <p><a href="admin-gallery-view">View Uploaded Gallery</a></p>
</body>
</html>
