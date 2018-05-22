<?php
session_start();

require_once "../Models/DB.php";

if (isset($_POST['remember']))
    setcookie('pongizr_token', $_POST['token'], time() + 60 * 60 * 24 * 30);

$isTokenSet = DB::getToken();
// Si présence d'un token
if ($isTokenSet) {
    // strcmp renvoie 0 si les deux chaines sont identiques, d'où le '!'
    $hashedPwd = crypt($_POST['token'], $isTokenSet['salt']);
    if (!strcmp($hashedPwd, $isTokenSet['token'])) {
        redirectToAdminResults();
    }
    header('Location: ../admin/index.php?error=' . BAD_TOKEN);
} else {
    // créée le salt selon l'algo Blowfish
    $salt = uniqid('$2y$07$', true);
    // crypte le token avec le salt précédemment créé
    $hashedToken = crypt($_POST['token'], $salt);

    redirectToAdminResults();
}

function redirectToAdminResults()
{
    $_SESSION['auth'] = true;
    header('Location: ../admin/results.php');
}
