<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
ini_set('display_errors', 'on');
require_once '../api.php';
$email = '';
$message = '';
$data = 'kk';
if (!empty($_REQUEST)) {
    if (!empty($_REQUEST['email']) && !empty($_REQUEST['message'])) :
        $email = htmlspecialchars(base64_decode($_REQUEST['email']));
        $message = htmlspecialchars(base64_decode($_REQUEST['message']));
    endif;
}
if (empty($email) || !(match_email(htmlspecialchars(base64_decode($_REQUEST['email']))))) :
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $message = "Erreur interne du serveur. reéssayez!";
    $data = http_build_query(["response_message" => $message]);
    $login = "../../public/login.php?page=login&$data";
    redirect($uri, $login);
endif;

?>
<h1>Admin: <?php echo $email; ?></h1>
<h2>Message: <?= $message ?></h2>