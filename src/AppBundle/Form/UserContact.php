<?php
/**
 * Created by PhpStorm.
 * User: ilithpriscith
 * Date: 23/02/2018
 * Time: 14:23
 */

namespace AppBundle\Form;

use AppBundle\AppBundle;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserContact extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', TextType::class, array('attr'=>array('placeholder'=>'Email')))
            ->add('subject', TextType::class, array('attr'=>array('placeholder'=>'Subject')))
            ->add('message', TextareaType::class, array('attr'=>array('placeholder'=>'Message')));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array('data_class'=>'AppBundle\Entity\Messageries'));
    }
}