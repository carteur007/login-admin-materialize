<?php
$title = "Login";
include '../src/topbarlogin.php';
require '../admin/api.php';
define('LOGIN', 'admin@sfb.com');
define('PASSWORD', 'admin');

//Vérification du formulaire 
// Si le tableau $_POST existe alors le formulaire a été envoyé
$message = 'Nom d\'utilisateur ou mot de pass incorrect';
if (!empty($_POST)) :
    if (empty($_POST['email'])) :
        $message = 'Veuillez indiquer votre login svp !';
    elseif (empty($_POST['password'])) :
        $message = 'Veuillez indiquer votre mot de passe svp !';
    elseif ((htmlspecialchars($_POST['email']) === LOGIN) && (htmlspecialchars($_POST['password']) === PASSWORD)) :
        $message = base64_encode('Bienvenue ' . LOGIN . ' !');
        $email = base64_encode(htmlspecialchars($_POST['email']));
        $data = [
            'email' => $email,
            'message' => $message
        ];
        $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        $data_url = http_build_query($data);
        $dashboard = "../admin/page/dashboard.php?page=dashboard&$data_url";
        redirect($uri, $dashboard);
    endif;
endif;
?>

<div class="center">
    <img class="responsive-img avatar-user" style="width: 80px;" src="../imgs/avatar-orange.png" />
    <h4 class="black-default-text">SVP, Connectez vous pour</h4>
    <h5 class="black-default-text">acceder au tableau de bord</h5>
    <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 2% 2% 0 2%; border: 2px solid #EEE;">
            <form class="col s12" method="post">
                <div class='row'>
                    <div class='col s12'>
                        <h5 class="orange-default-text"><?= $message ?></h5>

                    </div>
                </div>

                <div class='row'>
                    <div class='input-field col s12'>
                        <input class='validate' type='email' name='email' id='email' />
                        <label for='email'>Entrer votre email</label>
                    </div>
                </div>

                <div class='row'>
                    <div class='input-field col s12'>
                        <input class='validate' type='password' name='password' id='password' />
                        <label for='password'>Entrer votre mot de pass </label>
                    </div>
                </div>

                <br />
                <center>
                    <div class='row'>
                        <button type='submit' name='btn_login' class='col s12 btn-login btn btn-large waves-effect waves-ripple '>Connexion</button>
                    </div>
                </center>
            </form>
        </div>
    </div>
</div>
<?php
include '../src/footerlogin.php';
?>