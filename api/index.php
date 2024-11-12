<?php

// Forward Vercel requests to normal index.php
require __DIR__ . '/../public/index.php';
require __DIR__ . '/../public/assets/CV.jpg';
foreach (scandir(dirname(__DIR__ . '/../public/assets/css')) as $filename) {
    $path = dirname(__DIR__ . '/../public/assets/css') . '/' . $filename;
    if (is_file($path)) {
        require $path;
    }
}
foreach (scandir(dirname(__DIR__ . '/../public/assets/js')) as $filename) {
    $path = dirname(__DIR__ . '/../public/assets/js') . '/' . $filename;
    if (is_file($path)) {
        require $path;
    }
}
foreach (scandir(dirname(__DIR__ . '/../public/assets/images')) as $filename) {
    $path = dirname(__DIR__ . '/../public/assets/images') . '/' . $filename;
    if (is_file($path)) {
        require $path;
    }
} 
