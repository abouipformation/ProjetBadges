<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 14/10/16
 * Time: 11:56
 */

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class ArticleCategory
 * @package AppBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="article_category")
 */
class ArticleCategory
{
    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(name="name", type="string", length=100)
     */
    protected $name;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Annonce", mappedBy="articleCategory")
     */
    protected $annonces;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return ArticleCategory
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    public function __construct()
    {
        $this->annonces =  new ArrayCollection();
    }

    /**
     * @param Annonce $annonce
     */
    public function addAnnonce($annonce)
    {
        $this->annonces->add($annonce);
        $annonce->setArticleCategory($this);
    }

    /**
     * @param Annonce $annonce
     */

    public function removeAnnonce($annonce)
    {
        $this->annonces->removeElement($annonce);
    }

}