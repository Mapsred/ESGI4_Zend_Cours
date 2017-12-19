<?php
/**
 * Created by PhpStorm.
 * User: francois.mathieu
 * Date: 19/12/2017
 * Time: 14:54
 */

namespace Contact\Manager;

use Contact\Entity\Contact;
use Contact\Form\ContactForm;

class ContactManager extends BaseManager
{
    /**
     * @param ContactForm $form
     */
    public function createContactFromContactForm(ContactForm $form)
    {
        $data = $form->getData();

        $contact = new Contact();
        $contact->setName($data['name'])->setEmail($data['email']);

        $this->persistAndFlush($contact);
    }
}