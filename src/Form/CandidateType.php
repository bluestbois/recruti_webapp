<?php

namespace App\Form;

use App\Entity\Candidate;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class CandidateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName')
            ->add('lastName')
            ->add('email')
            ->add('password',PasswordType::class)
            ->add('birthday')
            ->add('gender')
            ->add('nationality')
            ->add('phoneNumber')
            ->add('address')
            ->add('image')
            ->add('LOE')
            ->add('experience')
            ->add('nationalities')
            ->add('events')
            ->add('projects')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Candidate::class,
        ]);
    }
}
