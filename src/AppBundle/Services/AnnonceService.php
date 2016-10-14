<?php
namespace AppBundle\Services;

use Doctrine\ORM\EntityManager;

class AnnonceService
{
    protected $entityManager;

    public function __construct(EntityManager $em)
    {
        $this->entityManager = $em;
    }

    public function saveAnnonce($annonce)
    {
        $this->entityManager->persist($annonce);
        $this->entityManager->flush();
    }
}