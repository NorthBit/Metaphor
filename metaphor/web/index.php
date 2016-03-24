<?php
    include 'android_ua.php';

    $final_ua = get_android_ua();
    $path = "../config/$final_ua.html";

    if (file_exists($path))
        include $path;
    else
        die('Unsupported!');
?>