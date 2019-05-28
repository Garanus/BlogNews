<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegisterUserType extends AbstractType
{
    public function getName()
    {
        return 'userRegister';
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', 'email', array(
                'label' => 'E-mail'
            ))
            ->add('username', 'text', array(
                'label' => 'username'
            ))
            ->add('plainPassword', 'repeated', array(
                'type' => 'password',
                'first_options' => array(
                    'label' => 'Hasło'
                ),
                'second_options' => array(
                    'label' => 'Powtórz haslo')
            ))
            ->add('submit', 'submit', array(
                'label' => 'Zarejestruj'
            ));
    }

    public function setDefaultOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\User'
        ));
    }
}
