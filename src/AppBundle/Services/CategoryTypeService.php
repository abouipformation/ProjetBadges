<?php
namespace AppBundle\Services;

use Doctrine\ORM\EntityManager;

class CategoryTypeService
{
    protected $entityManager;


    public function __construct(EntityManager $em)
    {
        $this->entityManager = $em;
    }

    public function saveCategoryType($category_type)
    {
        $this->entityManager->persist($category_type);
        $this->entityManager->flush();
    }

}