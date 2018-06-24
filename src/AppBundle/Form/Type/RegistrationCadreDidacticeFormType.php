<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseRegistrationFormType;

class RegistrationCadreDidacticeFormType extends AbstractType {

  public function buildForm(FormBuilderInterface $builder, array $options) {
    $builder
      ->add('nume', TextType::class, $options = ['required' => TRUE])
      ->add('prenume', TextType::class, $options = ['required' => TRUE])
      ->add('grad', TextType::class, $options = ['required' => TRUE])
      ->remove('username');
  }

  public function getParent() {
    return BaseRegistrationFormType::class;
  }
}