<?php

namespace BM\WarhammerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FigurineType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name')->add('mouvement')->add('cc')->add('ct')->add('f')->add('e')->add('pv')->add('a')->add('cd')->add('svg')->add('fnp')->add('cast')->add('deny')->add('rules')->add('price')->add('type_keywords');
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BM\WarhammerBundle\Entity\Figurine'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'bm_warhammerbundle_figurine';
    }


}
