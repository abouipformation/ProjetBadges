<?php
namespace AppBundle\Services;

use Doctrine\ORM\EntityManager;

class ArticleCategoryService
{
    protected $entityManager;

    public function __construct(EntityManager $em)
    {
        $this->entityManager = $em;
    }

    public function saveArticleCategory($article_category)
    {
        $this->entityManager->persist($article_category);
        $this->entityManager->flush();
    }
}