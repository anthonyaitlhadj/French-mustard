<?php
/**
 * Created by PhpStorm.
 * User: aaitlhadj
 * Date: 21/02/2018
 * Time: 09:35
 */

namespace AppBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class UserRegistration extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lastname', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Lastname'
                )
            ))
            ->add('firstname', TextType::class, array(
                    'attr' => array(
                        'placeholder' => 'Firstname')
            ))
            ->add('email', EmailType::class, array(
                'attr' => array(
                    'placeholder' => 'Email')
            ))
            ->add('password', PasswordType::class, array(
                'attr' => array(
                    'placeholder' => 'Password')
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Users'
        ));
    }

}