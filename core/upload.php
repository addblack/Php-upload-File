<?php

$image = $_FILES['image'];

// Validation
$allowedFileTypes = ['image/jpeg', 'image/png'];

if (!in_array($image['type'], $allowedFileTypes)) {
    die('incorrect file type');
}

$fileSize = $image['size'] / 1000000;

$maxSize = 1;

if ($fileSize > 1) {
    die('File is too large');
}

if (!is_dir('../uploads')) {
    mkdir('../uploads', 0777, true);
}

$extension = pathinfo($image['name'], PATHINFO_EXTENSION);

$filename = time() . ".$extension";

move_uploaded_file($image['tmp_name'], '../uploads/' . $filename);

