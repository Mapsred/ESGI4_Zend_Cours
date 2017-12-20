<?php
/**
 * Created by PhpStorm.
 * User: francois.mathieu
 * Date: 19/12/2017
 * Time: 14:55
 */

namespace Contact\Factory;

use Contact\Form\ContactForm;
use Contact\Manager\BaseManager;
use Contact\Manager\ContactManager;
use Doctrine\ORM\EntityManager;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * Class ManagerFactory
 *
 * @author François MATHIEU <francois.mathieu@livexp.fr>
 */
class ManagerFactory implements FactoryInterface
{
    /**
     * Create an object
     *
     * @param  ContainerInterface $container
     * @param  string $requestedName
     * @param  null|array $options
     * @return BaseManager
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        /** @var EntityManager $manager */
        $manager = $container->get('doctrine.entitymanager.orm_default');

        $form = null;
        if ($requestedName === ContactManager::class) {
            $form = new ContactForm();
        }

        return new $requestedName($manager, $form);
    }
}
