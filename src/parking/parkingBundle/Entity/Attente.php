<?php

namespace parking\parkingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Attente
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="parking\parkingBundle\Entity\AttenteRepository")
 */
class Attente
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
     * @var integer
     *
     * @ORM\Column(name="rang", type="integer")
     */
    private $rang;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_utilisateur", type="integer")
     */
    private $idUtilisateur;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_place", type="integer")
     */
    private $idPlace;


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
     * Set rang
     *
     * @param integer $rang
     * @return Attente
     */
    public function setRang($rang)
    {
        $this->rang = $rang;

        return $this;
    }

    /**
     * Get rang
     *
     * @return integer 
     */
    public function getRang()
    {
        return $this->rang;
    }

    /**
     * Set idUtilisateur
     *
     * @param integer $idUtilisateur
     * @return Attente
     */
    public function setIdUtilisateur($idUtilisateur)
    {
        $this->idUtilisateur = $idUtilisateur;

        return $this;
    }

    /**
     * Get idUtilisateur
     *
     * @return integer 
     */
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }

    /**
     * Set idPlace
     *
     * @param integer $idPlace
     * @return Attente
     */
    public function setIdPlace($idPlace)
    {
        $this->idPlace = $idPlace;

        return $this;
    }

    /**
     * Get idPlace
     *
     * @return integer 
     */
    public function getIdPlace()
    {
        return $this->idPlace;
    }
}
