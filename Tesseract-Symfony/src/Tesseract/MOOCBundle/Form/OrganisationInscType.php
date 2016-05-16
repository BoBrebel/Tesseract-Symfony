<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Tesseract\MOOCBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OrganisationInscType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('pseudo')
                ->add('mail','email')
                ->add('mdp')
                ->add('nom')
                ->add('prenom')
                ->add('telephone')
                ->add('adresse')
                ->add('file','file')
                ->add('nomO')
                ->add('adressO')
                ->add('emailO')
                ->add('matriculeO')
                ->add('file2','file')
                
                ->add('update', 'submit');
    }

    /**
     * @return string
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Condors\TnMallBundle\Entity\Enseigne'
        ));
    }

    public function getName() {
        return 'OrganisationInscType';
    }

}
