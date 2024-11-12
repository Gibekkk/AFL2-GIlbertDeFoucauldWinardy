<?php

// Forward Vercel requests to normal index.php
require __DIR__ . '/../public/index.php';
foreach (scandir(dirname(__DIR__ . '/../public/assets/css')) as $filename) {
    $path = dirname(__DIR__ . '/../public/assets/css') . '/' . $filename;
    if (is_file($path)) {
        require $path;
    }
}
