<?php
require_once "ConnexionManager.class.php";
require_once "UserManager.class.php";

class LoginManager extends UserManager
{
    public function connexionUtilisateur($emailRentre, $passwrdRentre)
    {
        $this->recuperationDesUtilisateurs();
        $utilisateurs = $this->utilisateurs;
        foreach ($utilisateurs as $utilisateur) {
            if ($utilisateur->getEmail() === $emailRentre && password_verify($passwrdRentre, $utilisateur->getPasswrd())) {
                $this->initialisationSessionUtilisateur($utilisateur);
            }
        }
        header('Location: index.php');
    }

    private function initialisationSessionUtilisateur(object $utilisateur)
    {
        $_SESSION['utilisateur'] = [
            'id_utilisateur' => $utilisateur->getIdUtilisateur(),
            'email' => $utilisateur->getEmail(),
            'passwrd' => $utilisateur->getPasswrd(),
            'est_admin' => $utilisateur->getEstAdmin()
        ];
    }
}
