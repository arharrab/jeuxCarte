<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Carte
 */
class Carte
{
    /**
     * @var int
     */
    private $id;
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="Categorie")
     */
    private $categorie;


    /**
     * @var string
     */
    private $value;

    /**
     * @var integer
     */
    private $sort;

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
     * Set value
     *
     * @param string $value
     * @return Carte
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }
    
    /**
     * Set value
     *
     * @param string $sort
     * @return Carte
     */
    public function setSort($sort)
    {
        $this->sort = $sort;

        return $this;
    }

    /**
     * Get sort
     *
     * @return string 
     */
    public function getSort()
    {
        return $this->sort;
    }
    
    /**
     * Set categorie
     *
     * @param Categorie $categorie
     *
     * @return Cartes
     */
    public function setCategorie(Categorie $categorie = null)
    {
        $this->categorie = $categorie;
        return $this;
    }

    /**
     * Get categorie
     *
     * @return Categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }
    
    
}
