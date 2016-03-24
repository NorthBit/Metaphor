<?php
    function get_android_ua()
    {
        $ua = $_SERVER['HTTP_USER_AGENT'];
        $ua_start = strpos($ua, 'Android');
        if ($ua_start < 0)
            die('Unsupported!');

        $ua_end = strpos($ua, ')', $ua_start);
        $final_ua = substr($ua, $ua_start, $ua_end - $ua_start);
        
        return $final_ua;
    }
?>