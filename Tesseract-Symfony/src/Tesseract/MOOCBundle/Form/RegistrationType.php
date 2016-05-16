<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Tesseract\MOOCBundle\Form;

/**
 * Description of RegistrationType
 *
 * @author haikal
 */
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType {

    public function getName() {
        return "app_user_registration";
    }

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('nom')->add('prenom')->add('telephone')->add('adresse')->add('file','file',array('label' => 'Your picture', 'attr' => array('class' => 'photo')))->add('type','choice',array('attr' => array('class' => 'boxxx'),
        'choices' => array(
          'coach' => 'Coach',
          'student' => 'Student'
        ),
        'multiple' => false,
        'expanded' => true,
        'required' => true,
    ))->add('cv','file',array('required' => false,'label' => 'Curriculum Vitae ', 'attr' => array('class' => 'cv')));
    }

    public function getParent() {
        return 'fos_user_registration';
    }

    public function getBlockPrefix() {
        return 'app_user_registration';
    }

}
