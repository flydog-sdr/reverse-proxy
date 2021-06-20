<?php
    function is_curl(){
        $regex_match="/curl/";
        return isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE']) or preg_match($regex_match, strtolower($_SERVER['HTTP_USER_AGENT']));
    }
        if(is_curl()) {
            echo 'status=0';
        } else {
            header( "HTTP/1.1 301 Moved Permanently"); 
            header("Location: https://sdrotg.com/manual/admin.html#%E4%BB%8E%E5%A4%96%E9%83%A8%E8%BF%9E%E5%85%A5-flydog-sdr"); 
        }
?>

