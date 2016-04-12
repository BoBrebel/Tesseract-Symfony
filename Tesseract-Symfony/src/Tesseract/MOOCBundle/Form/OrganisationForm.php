<?php


namespace Tesseract\MOOCBundle\Form;

class OrganisationForm extends \Symfony\Component\Form\AbstractType {
    public function getName() {
        return 'OrganisationForm';
    }
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options) {
        $builder->add('nom')->add('adress')->add('email','email')->add('matricule')->add('photo','file')->add('Register','submit',array('attr' => array('class'=>'waves-effect waves-light btn-large green accent-2 indigo-text text-darken-4')));
    }

}
