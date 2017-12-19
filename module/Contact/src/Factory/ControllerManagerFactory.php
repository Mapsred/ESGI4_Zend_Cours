<?php
/**
 * Created by PhpStorm.
 * User: francois.mathieu
 * Date: 19/12/2017
 * Time: 14:59
 */

namespace Contact\Factory;

use Contact\Controller\ContactController;
use Contact\Manager\ContactManager;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * Class ControllerManagerFactory
 *
 * @author François MATHIEU <francois.mathieu@livexp.fr>
 */
class ControllerManagerFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return ContactController
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $manager = null;
        if ($requestedName === ContactController::class) {
            $manager = $container->get(ContactManager::class);
        }

        return new ContactController($manager);
    }

}