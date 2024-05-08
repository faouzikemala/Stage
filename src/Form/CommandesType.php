<?php

namespace App\Form;

use App\Entity\Commandes;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class CommandesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstname')
            ->add('lastname')
            ->add('email')
            ->add('password')
            ->add('adress')
            ->add('adress2')
            ->add('city')
            ->add('state')
            ->add('zip')
            ->add('item1', ChoiceType::class, [
                'choices' => [
                    'choisir un item' => 0, // 'choisir un item' => 'choisir un item
                    'MST01_01' => 'MST01_01',
                    'MST01_02' => 'MST01_02',

                ]
            ])
            ->add('item2', ChoiceType::class, [
                'choices' => [
                    'choisir un item' => 0,
                    'MST02_01' => 'MST02_01',
                    'MST02_02' => 'MST02_02',
                ]
            ])
            ->add('comment')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Commandes::class,
        ]);
    }
}
