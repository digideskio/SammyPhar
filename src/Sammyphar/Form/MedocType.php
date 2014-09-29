<?php
namespace Sammyphar\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;

class MedocType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'name',
                'text',
                array(
                    'label' => 'name'
                )
            )
            ->add(
                'price',
                'text',
                array(
                    'label' => 'price'
                )
            );
    }

    public function getName()
    {
        return 'competence_form';
    }
}