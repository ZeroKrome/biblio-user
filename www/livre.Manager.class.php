<?php
require_once "ConnexionManager.class.php";

class LivreManager extends ConnexionManager
{
    private array $livres = array();

    public function AjouterLivre($nouveauLivre)
    {
        $this->livres[] = $nouveauLivre;
    }

    public function chargementLivres()
    {
        $connexion = $this->getConnexionBdd();
        $req = $connexion->prepare("SELECT * FROM livre LIMIT 10");
        $req->execute();
        $livresImportes = $req->fetchALL(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach ($livresImportes as $livre) {
            $nouveauLivre = new Livre($livre['id_livre'], $livre['titre'], $livre['image_url'], $livre['nb_pages']);
            $this->AjouterLivre($nouveauLivre);
        }
    }

    /**
     * Get the value of livres
     *
     * @return array
     */
    public function getLivres(): array
    {
        return $this->livres;
    }
}
