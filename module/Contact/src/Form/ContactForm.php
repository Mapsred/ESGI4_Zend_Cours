<?php

namespace Contact\Form;

use Zend\Form\Element\Csrf;
use Zend\Form\Form;
use Zend\InputFilter\InputFilterProviderInterface;
use Zend\Validator;

/**
 * Class ContactForm
 *
 * @author François MATHIEU <francois.mathieu@livexp.fr>
 */
class ContactForm extends Form implements InputFilterProviderInterface
{
    /**
     * ContactForm constructor.
     * @param null $name
     * @param array $options
     */
    public function __construct($name = null, $options = [])
    {
        parent::__construct($name, $options);

        $this->add([
            'type' => 'Zend\Form\Element\Text',
            'name' => 'name',
            'options' => ['label' => 'Your name'],
            'attributes' => ['class' => 'form-control'],
        ])->add([
            'type' => 'Zend\Form\Element\Email',
            'name' => 'email',
            'options' => ['label' => 'Your email address'],
            'attributes' => ['class' => 'form-control'],
        ])->add([
            'name' => 'send',
            'type' => 'Zend\Form\Element\Submit',
            'attributes' => ['value' => 'Submit', 'class' => 'btn btn-default'],

        ])->add(new Csrf('security'));
    }

    /**
     * Should return an array specification compatible with
     * {@link Zend\InputFilter\Factory::createInputFilter()}.
     *
     * @return array
     */
    public function getInputFilterSpecification()
    {
        return [
            'name' => [
                'validators' => [
                    ['name' => Validator\StringLength::class, 'options' => ['min' => 2, 'max' => 256]]
                ],
            ],
        ];

    }
}
