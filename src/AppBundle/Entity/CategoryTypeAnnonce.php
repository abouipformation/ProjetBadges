<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class CategoryTypeAnnonce
 * @package AppBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="category_type_annonce")
 */
class CategoryTypeAnnonce
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(name="name", type="string", length=100)
     */
    protected $name;


    /**
     *@var ArrayCollection
     * @ORM\OneToMany(targetEntity="Annonce", mappedBy="categoryTypeAnnonce")
     */
    protected $annonces;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return CategoryTypeAnnonce
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param Annonce $annonce
     */
    public function addAnnonce($annonce)
    {
        $this->annonces->add($annonce);
        $annonce->setCategoryTypeAnnonce($this);
    }

    /**
     * @param Annonce $annonce
     */

    public function removeAnnonce($annonce)
    {
        $this->annonces->removeElement($annonce);
    }


}