<?php

namespace Videl\PublishMyCodeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('description')
            ->add('date')
            ->add('voteplus')
            ->add('voteminus')
            ->add('Tags', 'entity', array(
                'class' => 'PublishMyCodeBundle:Tag',
                'multiple' => true,
                'expanded' => true,
                'property' => 'name'
                )
            )
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Videl\PublishMyCodeBundle\Entity\Post'
        ));
    }

    public function getName()
    {
        return 'videl_publishmycodebundle_posttype';
    }
}
