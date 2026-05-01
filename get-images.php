<?php
header('Content-Type: application/json');

$galleryPath = '/gallery/';
$images = [];

if (is_dir($galleryPath)) {
    $files = scandir($galleryPath);
    foreach ($files as $file) {
        $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'bmp'])) {
            $images[] = $file;
        }
    }
}

echo json_encode($images);
?>
