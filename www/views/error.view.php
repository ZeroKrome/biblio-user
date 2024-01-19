<?php ob_start() ?>
<?php session_start(); ?>

<h1>TES CON OU QUOI !!!!!!!!!!!!!!!!!</h1>
<h2>Tu reste la et puis c'est tout !!!!!</h2>

<h3>click moi la dessus🤬
    <a class="btn btn-success my-2 my-sm-0" href="accueil">Accueil
    </a>
</h3>
<?php
$titre = "ERREUR 400000000004";
$content = ob_get_clean();
require_once "template.view.php";
?>