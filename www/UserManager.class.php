<?php
require_once "ConnexionManager.class.php";
require_once "User.class.php";

class UserManager extends ConnexionManager
{
    public array $utilisateurs = array();


    public function recuperationDesUtilisateurs()
    {
        $connexion = $this->getConnexionBdd();
        $req = $connexion->prepare("SELECT * FROM utilisateur");
        $req->execute();
        $utilisateursRecuperes = $req->fetchALL(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach ($utilisateursRecuperes as $utilisateur) {
            $nouvelUtilisateur = new User($utilisateur['id_utilisateur'], $utilisateur['email'], $utilisateur['passwrd'], $utilisateur['est_administrateur']);
            print_r($nouvelUtilisateur);
            self::ajouterUtilisateur($nouvelUtilisateur);
        }
    }

    private function ajouterUtilisateur($nouvelUtilisateur)
    {
        $this->utilisateurs[] = $nouvelUtilisateur;
    }
}
