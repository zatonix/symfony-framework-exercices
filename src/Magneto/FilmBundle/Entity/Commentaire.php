<?php

namespace Magneto\FilmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Magneto\FilmBundle\Entity\CommentaireRepository")
 */
class Commentaire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;

    /**
     * @ORM\ManyToOne(targetEntity="Magneto\FilmBundle\Entity\Film", inversedBy="commentaires")
     */
    private $film;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Commentaire
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set film
     *
     * @param \Magneto\FilmBundle\Entity\Film $film
     * @return Commentaire
     */
    public function setFilm(\Magneto\FilmBundle\Entity\Film $film = null)
    {
        $this->film = $film;

        return $this;
    }

    /**
     * Get film
     *
     * @return \Magneto\FilmBundle\Entity\Film 
     */
    public function getFilm()
    {
        return $this->film;
    }
}
