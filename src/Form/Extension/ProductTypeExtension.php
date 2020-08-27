<?php


namespace App\Form\Extension;


use Sylius\Bundle\ProductBundle\Form\Type\ProductType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;


class ProductTypeExtension extends AbstractTypeExtension
{

    public static function getExtendedTypes(): iterable
    {
        return [ProductType::class];
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // Adding new fields works just like in the parent form type.
            ->add('color', ChoiceType::class, [
                'required' => false,
                'label' => 'Color',
                'choices' => [
                    'red' => 'red',
                    'blue' => 'blue',
                    'green' => 'green',
                ],

            ]);
    }
}
