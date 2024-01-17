<?php ob_start() ?>
<h1>TES CON OU QUOI !!!!!!!!!!!!!!!!!</h1>
<h2>Tu reste la et puis c'est tout !!!!!</h2>

<h3>click moi la dessus🤬
    <button type="button" class="btn btn-danger" href="accueil">CLICK</button>
</h3>
<?php
$titre = "ERREUR 400000000004";
$content = ob_get_clean();
require_once "template.view.php";
?>