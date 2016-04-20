<?php

namespace Tesseract\MOOCBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CoursType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('difficulte')
            ->add('description')
            ->add('badge')
            ->add('affiche')
            ->add('video')
            ->add('validation1')
            ->add('validation2')
            ->add('language')
            ->add('upload')
            ->add('idMatiere')
            ->add('idUtilisateur')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Tesseract\MOOCBundle\Entity\Cours'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tesseract_moocbundle_cours';
    }
}
