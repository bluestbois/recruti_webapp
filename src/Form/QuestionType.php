<?php

namespace App\Form;

use App\Entity\Question;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class QuestionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('statement')
            ->add('answerA')
            ->add('answerB')
            ->add('answerC')
            ->add('rightAnswer',ChoiceType::class, [
                'choices'  => [
                    'First answer' => 0,
                    'Second answer' => 1,
                    'Third answer' => 2,
                ],
            ])
            ->add('points')
            ->add('Test')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Question::class,
        ]);
    }
}
