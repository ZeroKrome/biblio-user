<!DOCTYPE html>
<html lang="fr">

<head>
    <meta name="description" content="site sur tout AHAHAH">
    <meta name="keywords" content="livres, biblio, bibiothèque, tout">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- based ccs bootstrap by bootswatch -->
    <link rel="stylesheet" href="https://bootswatch.com/5/slate/bootstrap.min.css">
    <title>Bibliothèque | <?php echo $titre ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="accueil">Biblio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="accueil">Accueil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="livres">Livre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="a-propos">A propos</a>
                    </li>

            </div>
        </div>
    </nav>
    <div id="container" class="m-2">
        <h1 class="rounded border border-dark p-2 m-2 text-center text-white bg-info"><?= $titre ?></h1>
        <?= $content ?>
    </div>

    <!-- javascript bootstrap version 4 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>