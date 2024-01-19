<?php ob_start() ?>

<form action="accueil" method="POST">
    <div class="form-group">
        <label for="email">Votre Email : </label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="passwrd">Votre mot de passe : </label>
        <input type="password" name="passwrd" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Se connecter</button>
</form>

<?php
$titre = 'Connexion';
$content = ob_get_clean();
require_once "template.view.php";
