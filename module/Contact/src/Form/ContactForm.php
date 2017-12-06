<?php

namespace Contact\Form;

use Zend\Form\Element\Csrf;
use Zend\Form\Form;

class ContactForm extends Form
{
    protected $captcha;

    public function __construct($name = null, $options = [])
    {
        parent::__construct($name, $options);

        $this->add([
            'name' => 'name',
            'options' => ['label' => 'Your name'],
            'type' => 'Text'
        ])->add([
            'type' => 'Zend\Form\Element\Email',
            'name' => 'email',
            'options' => ['label' => 'Your email address']
        ])->add([
            'name' => 'send',
            'type' => 'Submit',
            'attributes' => ['value' => 'Submit'],
        ])->add(new Csrf('security'));

    }
}
