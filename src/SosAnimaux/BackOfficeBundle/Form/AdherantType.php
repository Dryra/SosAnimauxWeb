<?php

namespace SosAnimaux\BackOfficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AdherantType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('email')
            ->add('mdp')
            ->add('telephone')
            ->add('ville')
            ->add('adresse')
            ->add('age')
            ->add('sexe')
            ->add('photo')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SosAnimaux\BackOfficeBundle\Entity\Adherant'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sosanimaux_backofficebundle_adherant';
    }
}
