<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;




class CategorieType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       
        
        $builder
            ->add('category', ChoiceType::class, array(
                    'choices' => array(
                        'DIAMOND'=>'DIAMOND',
                        'HEART'=>'HEART',
                        'SPADE'=>'SPADE',
                        'CLUB'=>'CLUB'                        
                    ),
                    'choices_as_values' => true
                )
            );
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Categorie'
        ));
    }
}
