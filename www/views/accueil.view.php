<?php require_once "LoginManager.class.php"; ?>
<?php ob_start() ?>

<!-- <h1>Ma page d'accueil</h1> -->


<?php

$message = '';
$loginmanager = new LoginManager();
if (isset($_POST['email']) && isset($_POST['passwrd'])) {
    $loginmanager->connexionUtilisateur($_POST['email'], $_POST['passwrd']);
    var_dump($_SESSION);
    if (!empty($_SESSION)) {
        $message = 'Vous êtes bien connecté';
    } else {
        $message = 'Problème lors de la connexion';
    }
}
?>

<?php if (isset($_POST)) : ?>
    <span class="badge rounded-pill bg-info"><?php echo $message ?></span>
<?php endif ?>

<?
$titre = "Bibliothèque de Mathieu AH AH AH";
$content = ob_get_clean();
require_once "template.view.php";
