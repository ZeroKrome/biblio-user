<?php ob_start() ?>
<!-- <h1>Ma page d'accueil</h1> -->


<?php
$titre = "Bibliothèque de Mathieu AH AH AH";
$content = ob_get_clean();
require_once "template.view.php";
