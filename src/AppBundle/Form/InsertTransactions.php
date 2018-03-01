<?php
/**
 * Created by PhpStorm.
 * User: ilithpriscith
 * Date: 26/02/2018
 * Time: 17:02
 */

namespace AppBundle\Form;
use AppBundle\AppBundle;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class InsertTransactions extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('CustomerName', TextType::class, array('attr'=>array('placeholder'=>'NOM Prénom')))
            ->add('CardNumber', TextType::class, array('attr'=>array('placeholder'=>'Numéro de carte bleue : 0000 0000 0000 0000')))
            ->add('ExpirationMonth', TextType::class, array('attr'=>array('placeholder'=>'Mois d\'expiration : MM')))
            ->add('ExpirationYear', TextType::class, array('attr'=>array('placeholder'=>'Année d\'expiration : AA')))
            ->add('Cryptogram', TextType::class, array('attr'=>array('placeholder'=>'Cryptogramme : 000')));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array('data_class'=>'AppBundle\Entity\Transactions'));
    }
}