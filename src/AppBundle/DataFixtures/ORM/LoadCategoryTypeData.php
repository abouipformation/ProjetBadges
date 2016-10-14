<?php
namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\CategoryTypeAnnonce;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;


class LoadCategoryTypeData implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param \Doctrine\Common\Persistence\ObjectManager $manager
     */
    protected $container;

    /**
     * Sets the container.
     *
     * @param \Symfony\Component\DependencyInjection\ContainerInterface|null $container A ContainerInterface instance or null
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
            $categoryType =  new CategoryTypeAnnonce();
            $categoryType->setName('Offres');
            $this->container->get('category.type')->saveCategoryType($categoryType);

            $categoryType =  new CategoryTypeAnnonce();
            $categoryType->setName('Demandes');
            $this->container->get('category.type')->saveCategoryType($categoryType);
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 1;
    }
}