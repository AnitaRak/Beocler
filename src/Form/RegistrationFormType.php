<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints as Assert;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            ->add('no_adeli', NumberType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'minlength' => '9',
                    'maxlength' => '9',

                ],
                'label' => 'Numero Adeli',
                'label_attr' => [
                    'class' => 'form-label labellogin'
                ],

            ])
            ->add('status', ChoiceType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Status',
                'label_attr' => [
                    'class' => 'labellogin'
                ],
                'choices' => [
                    'Étudiant' => 'Etudiant',
                    'Libéral' => 'Liberal',
                    'Salarié' => 'Salarie',
                    // Ajoutez d'autres options si nécessaire
                ]
            ])
            ->add('email', EmailType::class, [
                'attr' => [
                    'class' => 'form-control labellogin'
                ],
                'label' => 'E-mail',
                'label_attr' => [
                    'class' => 'labellogin'
                ]
            ])

            ->add('last_name', TextType::class, [
                'attr' => [
                    'class' => 'form-control labellogin'

                ],
                'label' => 'Nom',
                'label_attr' => [
                    'class' => 'labellogin'
                ]

            ])
            ->add('name', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Prenom',
                'label_attr' => [
                    'class' => 'labellogin'
                ]
            ])
            ->add('phone', TelType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Telephone',
                'label_attr' => [
                    'class' => 'labellogin'
                ]

            ])

            ->add('address', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Adresse',
                'label_attr' => [
                    'class' => 'labellogin'
                ]
            ])
            ->add('zipcode', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Code postal',
                'label_attr' => [
                    'class' => 'labellogin'
                ]
            ])
            ->add('city', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Ville',
                'label_attr' => [
                    'class' => 'labellogin'
                ]
            ])


            ->add('RGPDconsent', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
                'label' => "En m'inscrivant sur ce site J'accepte les termes.",
            ])

            ->add('password', RepeatedType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'autocomplete' => 'new-password',
                ],
                'type' => PasswordType::class,
                'mapped' => false,


                'first_options' => ['attr' => ['class' => 'form-control'], 'label' => 'Mot de passe',
                'label_attr' => ['class' => 'labellogin'],],
                'second_options' => ['attr' => ['class' => 'form-control'], 'label' => 'Confirmer votre Mot de passe',
                'label_attr' => ['class' => 'labellogin'],],


                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrez un mot de passe',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Votre Mot de passe doit avoir au moins {{ limit }} caractere',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
                'invalid_message' => 'Les mots de passe ne correspondent pas.'

            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
