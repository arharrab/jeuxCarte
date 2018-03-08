<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class CarteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('value', ChoiceType::class, array(
                    'choices' => array(
                        "ACE" => "ACE",
                        "TWO" => "TWO",
                        "THREE" => "THREE",
                        "FOUR" => "FOUR",
                        "FIVE" => "FIVE",
                        "SIX" => "SIX",
                        "SEVEN" => "SEVEN",
                        "EIGHT" => "EIGHT",
                        "NINE" => "NINE",
                        "TEN" => "TEN",
                        "JACK" => "JACK",
                        "QUEEN" => "QUEEN",
                        "KING" => "KING"                        
                    ),
                    'choices_as_values' => true
                )
            )
            ->add('categorie', EntityType::class, array(
                'class' => 'AppBundle:Categorie',
                'empty_data' =>null,
                'required' =>true
            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Carte'
        ));
    }
}
