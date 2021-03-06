<?php

namespace App\Form;

use App\Entity\Like;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class LikeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom_like',TextType::class,[
                'attr'=>['placeholder'=>'entrer la description'],
            ])
            ->add('rate',NumberType::class,[
                'attr'=>['placeholder'=>'entrer la rate'],
            ])
            ->add('note',NumberType::class,[
                'attr'=>['placeholder'=>'entrer la note'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Like::class,
        ]);
    }
}
