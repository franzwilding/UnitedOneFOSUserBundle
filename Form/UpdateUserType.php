<?php

namespace United\OneFOSUserBundle\Form;

use FOS\UserBundle\Form\Type\ProfileFormType;
use Symfony\Component\Form\FormBuilderInterface;

class UpdateUserType extends ProfileFormType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->addExtraFieldsBefore($builder, $options);
        parent::buildForm($builder, $options);
        $this->addExtraFieldsAfter($builder, $options);

        $builder
            ->add('save', 'submit_or_delete')
        ;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    protected function addExtraFieldsBefore(FormBuilderInterface $builder, array $options) {}

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    protected function addExtraFieldsAfter(FormBuilderInterface $builder, array $options) {}
}