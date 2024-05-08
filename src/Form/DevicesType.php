<?php

namespace App\Form;

use App\Entity\Devices;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DevicesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('device_id')
            ->add('device_name')
            ->add('device_type')
            ->add('device_location')
            ->add('device_attribut')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Devices::class,
        ]);
    }
}
