<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseRegistrationFormType;

class RegistrationCadreDidacticeFormType extends AbstractType {

  public function buildForm(FormBuilderInterface $builder, array $options) {
    parent::buildForm($builder, $options);
  }

  public function getParent() {
    return BaseRegistrationFormType::class;
  }
}