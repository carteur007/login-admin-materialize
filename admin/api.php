<?php

function redirect($uri, $extra, $status_code = 301)
{
    $host  = $_SERVER['HTTP_HOST'];
    //$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    //$extra = 'mypage.php';
    header("Location: http://$host$uri/$extra", true, $status_code);
    exit;
}
function base64url_encode($url)
{
    return rtrim(strtr(base64_encode($url), '+/', '-_'), '=');
}
function base64url_decode($url)
{
    return base64_decode(str_pad(strtr($url, '-_', '+/'), 4 - ((strlen($url) % 4) ?: 4), '=', STR_PAD_RIGHT));;
}
