<?php

namespace Application\Form;

// Define an alias for the class name
use Zend\Form\Form;
use Zend\InputFilter\InputFilterProviderInterface;
use Doctrine\ORM\EntityManager;

// A feedback form model
class ContactForm extends Form implements InputFilterProviderInterface
{
    protected $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        parent::__construct();

        $this->entityManager = $entityManager;
    }

    public function init()
    {
        $this->add([
            'name' => 'continent',
            'type' => 'DoctrineModule\Form\Element\ObjectSelect',
            'options' => [
                'object_manager' => $this->entityManager,
                'target_class' => 'Tutorial\Entity\Countries',
                'property' => 'continent',
                'is_method' => true,
                'find_method' => [
                    'name' => 'getContinent',
                ],
            ],
        ]);
    }

    public function getInputFilterSpecification()
    {
        return []; // filter and validation here
    }
}
