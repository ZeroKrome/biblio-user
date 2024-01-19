<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once "Livre.Manager.class.php";
require_once "Livre.class.php";

$livreManager = new LivreManager;
$livreManager->chargementLivresParUtilisateur($_SESSION['utilisateur']['id_utilisateur']);

ob_start();
?>
<?php session_start(); ?>

<?php
$livresEnCours = $livreManager->getLivres();

foreach ($livresEnCours as $livre) :
?>
    <div class="card mb-3 mx-auto w-25" style="min-width: 350px;">
        <img class="mx-auto" style="height: auto; width: 200px;" src="public/images/<?php echo $livre->getImage(); ?>" alt="Livre pour <?php echo $livre->getTitre(); ?>">
        <div class="card-body">
        </div>
        <ul class="list-group list-group-flush">
            <h5 class="card-title"><?php echo $livre->getTitre(); ?></h5>
            <p class="card-text"><?php echo $livre->getNbDePages(); ?> pages</p>
        </ul>
        <div class="card-body">
            <a href="#" class="btn btn-warning">Modifier</a>
            <a href="#" class="btn btn-danger">Supprimer</a>
        </div>
    </div>
<?php endforeach; ?>

<a href="#" class="btn btn-success d-block">Ajouter un livre</a>

<?php
$titre = "Ceci est ma bibliothèque 😄😄😄😄";
$content = ob_get_clean();
require_once "template.view.php";
?>