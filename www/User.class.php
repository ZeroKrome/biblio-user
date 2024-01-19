<?php
class User
{
    private int $idUtilisateur;
    private string $email;
    private string $passwrd;
    private bool $estAdmin;


    public function __construct(int $id, string $email, string $passwrd,  int $estAdmin)
    {
        $this->idUtilisateur = $id;
        $this->email = $email;
        $this->passwrd = $passwrd;
        $estAdmin === 1 ? $this->estAdmin = true : $this->estAdmin = false;
    }

    /**
     * Get the value of email
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Get the value of passwrd
     *
     * @return string
     */
    public function getPasswrd(): string
    {
        return $this->passwrd;
    }

    /**
     * Get the value of idUtilisateur
     *
     * @return int
     */
    public function getIdUtilisateur(): int
    {
        return $this->idUtilisateur;
    }

    /**
     * Get the value of estAdmin
     *
     * @return bool
     */
    public function getEstAdmin(): bool
    {
        return $this->estAdmin;
    }
}
