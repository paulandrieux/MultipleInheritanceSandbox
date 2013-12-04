<?php

namespace Acme\DemoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VideoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('creationDate')
            ->add('publicationDate')
            ->add('width')
            ->add('height')
            ->add('bitrate')
            ->add('duration')
            ->add('container')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\DemoBundle\Entity\Video'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'acme_demobundle_video';
    }
}
