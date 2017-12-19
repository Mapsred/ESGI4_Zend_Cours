<?php
/**
 * Created by PhpStorm.
 * User: francois.mathieu
 * Date: 19/12/2017
 * Time: 14:55
 */

namespace Contact\Factory;

use Contact\Manager\BaseManager;
use Doctrine\ORM\EntityManager;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

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

        return new $requestedName($manager);
    }
}