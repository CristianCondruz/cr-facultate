<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseRegistrationFormType;

class RegistrationFormType extends AbstractType {

  public function buildForm(FormBuilderInterface $builder, array $options) {
    $builder
      ->add('nume')
      ->add('prenume')
      ->remove('username')
      ->add('roles', ChoiceType::class, [
        'multiple' => true,
        'expanded' => false, // render check-boxes
        'label' => "Test",
        'choices' => [
          'Profesor' => 'ROLE_PROF',
          'Student' => 'ROLE_STUDENT',
        ],
      ]);
  }

  public function getParent() {
    return BaseRegistrationFormType::class;
  }

}