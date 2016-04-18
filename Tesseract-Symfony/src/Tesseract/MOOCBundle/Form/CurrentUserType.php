<?php

namespace Tesseract\MOOCBundle\Form;
use Symfony\Component\Form\Extension\Core\Type\DateType;
class CurrentUserType extends \Symfony\Component\Form\AbstractType {

    public function getName() {
        return 'CurrentUserType';
    }

    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options) {
        $builder->add('username','text',array('label' => 'User name', 'attr' => array('class' => 'validate')))
                ->add('nom','text',array('label' => 'First Name', 'attr' => array('class' => 'validate')))
                ->add('prenom','text',array('label' => 'Last Name', 'attr' => array('class' => 'validate')))
                ->add('adresse','text',array('label' => 'Adresse', 'attr' => array('class' => 'validate')))
                ->add('dateNaissance','date',array('attr' => array('class' => 'datepicker')))
                ->add('photo', 'text',array( 'attr' => array('class' => 'file-path validate')))
                ->add('update','submit',array( 'attr' => array('class' => 'waves-effect waves-light btn')));
    }

}
