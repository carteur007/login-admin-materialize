<?php
function match_email($email)
{
    $res = false;
    if (preg_match("/^[^@]*@[^@]*\.[^@]*$/", $email)) :
        return true;
    endif;
    //return $res;
}
function match_url($url)
{

    $regex = "((https?|ftp)\:\/\/)?"; // SCHEME

    $regex .= "([a-z0-9+!*(),;?&=\$_.-]+(\:[a-z0-9+!*(),;?&=\$_.-]+)?@)?"; // User and Pass

    $regex .= "([a-z0-9-.]*)\.([a-z]{2,3})"; // Host or IP

    $regex .= "(\:[0-9]{2,5})?"; // Port

    $regex .= "(\/([a-z0-9+\$_-]\.?)+)*\/?"; // Path

    $regex .= "(\?[a-z+&\$_.-][a-z0-9;:@&%=+\/\$_.-]*)?"; // GET Query

    $regex .= "(#[a-z_.-][a-z0-9+\$_.-]*)?"; // Anchor

    if (preg_match("/^$regex$/", $url)) :
        return true;
    endif;
}
function redirect($uri, $extra, $status_code = 303)
{
    $host  = $_SERVER['HTTP_HOST'];
    //$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    //$extra = 'mypage.php';
    //http://localhost:8080/login-admin-materialize
    header("Location: http://$host$uri/$extra", true, $status_code);
    exit();
}
function base64url_encode($url)
{
    return rtrim(strtr(base64_encode($url), '+/', '-_'), '=');
}
function base64url_decode($url)
{
    return base64_decode(str_pad(strtr($url, '-_', '+/'), 4 - ((strlen($url) % 4) ?: 4), '=', STR_PAD_RIGHT));;
}
