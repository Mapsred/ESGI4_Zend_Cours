<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Contact\Controller;

use Contact\Form\ContactForm;
use Contact\Manager\ContactManager;
use Zend\Http\Request;
use Zend\Http\Response;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\Mvc\Plugin\FlashMessenger\FlashMessenger;
use Zend\View\Model\ViewModel;

class ContactController extends AbstractActionController
{
    /**
     * @var ContactManager
     */
    private $contactManager;

    public function __construct(ContactManager $contactManager)
    {
        $this->contactManager = $contactManager;
    }

    /**
     * @return Response|ViewModel
     */
    public function contactAction()
    {
        $form = $this->contactManager->getForm();

        /** @var Request $request */
        $request = $this->getRequest();
        if ($request->isPost()) {
            $data = $this->params()->fromPost();
            $form->setData($data);

            if ($form->isValid()) {
                $this->contactManager->createContactFromContactForm($form);
                /** @var FlashMessenger $flashMessenger */
                $flashMessenger = $this->flashMessenger();

                $flashMessenger->addSuccessMessage('Thanks for your support !');

                return $this->redirect()->toRoute('contact', ['action' => 'thankYou']);
            }
        }

        return new ViewModel([
            'form' => $form
        ]);
    }
}
