<?php
class Livre
{
    private int $id;
    private string $titre;
    private string $image;
    private int $nbDePages;


    public function __construct(int $id, string $titre, string $image,  int $nbDePages)
    {
        $this->id = $id;
        $this->image = $image;
        $this->titre = $titre;
        $this->nbDePages = $nbDePages;
    }
    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Get the value of image
     *
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @param string $image
     *
     * @return self
     */
    public function setImage(string $image): self
    {
        $this->image = $image;
        return $this;
    }

    /**
     * Get the value of titre
     *
     * @return string
     */
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @param string $titre
     *
     * @return self
     */
    public function setTitre(string $titre): self
    {
        $this->titre = $titre;
        return $this;
    }

    /**
     * Get the value of nbDePages
     *
     * @return int
     */
    public function getNbDePages(): int
    {
        return $this->nbDePages;
    }

    /**
     * Set the value of nbDePages
     *
     * @param int $nbDePages
     *
     * @return self
     */
    public function setNbDePages(int $nbDePages): self
    {
        $this->nbDePages = $nbDePages;
        return $this;
    }
    public function afficherLesImageDesLivre()
    {

        $imagesLivres = [
            'apprendre-css.png',
            'apprendre-docker.png',
            'apprendre-java.png',
            'apprendre-js.png',
            'apprendre-php.png',
            'apprendre-wordpress.png',

        ];


        foreach ($imagesLivres as $image) {
            echo '<img src="./public/images/"' . $image . '" alt="Image">';
        }
    }
    public function afficherLesTitre()
    {

        $titresLivres = [
            'Apprendre le CSS',
            'Apprendre Docker',
            'Apprendre le Javascript',
            'Apprendre le JS',
            'Apprendre le PHP',
            'Apprendre le Wordpress',
        ];


        foreach ($titresLivres as $titre) {
            echo  $titre;
        }
    }
    public function afficherLeNombreDePages()
    {
        $nbDePagesPourChaqueLivre = [
            200,
            400,
            300,
            500,
            1000,
            10,
        ];

        foreach ($nbDePagesPourChaqueLivre as $nbDePages) {
            echo  $nbDePages;
        }
    }
}
