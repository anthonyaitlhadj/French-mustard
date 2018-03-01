<?php
/**
 * Created by PhpStorm.
 * User: aaitlhadj
 * Date: 26/02/2018
 * Time: 09:28
 */

namespace AppBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddProduct extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('productName', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Product name'
                )
            ))
            ->add('amount', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'amount')
            ))
            ->add('description', TextareaType::class, array(
            'attr' => array(
                'placeholder' => 'description')
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Products'
        ));
    }
}