<?php

$images = $_FILES['images'];

$normalizeImages = [];

foreach($images as $key_name => $value) {
    foreach($value as $key => $item) {
        $normalizeImages[$key][$key_name] = $item;
    }
}
