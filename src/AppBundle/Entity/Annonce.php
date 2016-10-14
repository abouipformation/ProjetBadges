<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Annonce
 * @package AppBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="annonce")
 */
class Annonce
{
    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var ArticleCategory
     * @ORM\ManyToOne(targetEntity="ArticleCategory", inversedBy="annonces")
     * @ORM\JoinColumn(name="article_category_id", referencedColumnName="id")
     */
    protected $articleCategory;

    /**
     * @var CategoryTypeAnnonce
     * @ORM\ManyToOne(targetEntity="CategoryTypeAnnonce", inversedBy="annonces")
     * @ORM\JoinColumn(name="category_type_id", referencedColumnName="id")
     */
    protected $categoryTypeAnnonce;

    /**
     * @var string
     * @ORM\Column(name="title", type="string", length=100)
     */
    protected $title;

    /**
     * @var string
     * @ORM\Column(name="description", type="string", length=100)
     */
    protected $description;

    /**
     * @var float
     * @ORM\Column(name="price", type="float", length=100)
     */
    protected $price;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return ArticleCategory
     */
    public function getArticleCategory()
    {
        return $this->articleCategory;
    }

    /**
     * @param ArticleCategory $articleCategory
     * @return Annonce
     */
    public function setArticleCategory($articleCategory)
    {
        $this->articleCategory = $articleCategory;
        return $this;
    }

    /**
     * @return CategoryTypeAnnonce
     */
    public function getCategoryTypeAnnonce()
    {
        return $this->categoryTypeAnnonce;
    }

    /**
     * @param CategoryTypeAnnonce $categoryTypeAnnonce
     * @return Annonce
     */
    public function setCategoryTypeAnnonce($categoryTypeAnnonce)
    {
        $this->categoryTypeAnnonce = $categoryTypeAnnonce;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Annonce
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Annonce
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return Annonce
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }



}