<?php ob_start() ?>

<?php
$titre = "A propos de moi COUCOU";
$content = ob_get_clean();
require_once "template.view.php";
?>