<?php

namespace AppBundle\Form;


use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnnonceType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [])
            ->add('description', TextType::class, [])
            ->add('price', TextType::class, [])
            ->add('articleCategory', EntityType::class,
                ['class' => 'AppBundle:ArticleCategory', 'choice_label' => 'name'])
            ->add('categoryTypeAnnonce', EntityType::class,
                ['class' => 'AppBundle:CategoryTypeAnnonce', 'choice_label' => 'name']);
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Annonce'
        ));
    }
}
