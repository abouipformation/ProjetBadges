<?php
namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\ArticleCategory;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadArticleCategoryData implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{
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

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $articleCategory =  new ArticleCategory();
        $articleCategory->setName('Voitures');
        $this->container->get('article.category')->saveArticleCategory($articleCategory);

        $articleCategory =  new ArticleCategory();
        $articleCategory->setName('Motos');
        $this->container->get('article.category')->saveArticleCategory($articleCategory);

        $articleCategory =  new ArticleCategory();
        $articleCategory->setName('Vélos');
        $this->container->get('article.category')->saveArticleCategory($articleCategory);
    }
    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
       return 2;
    }
}