<?php
/**
 * Created by PhpStorm.
 * User: francois.mathieu
 * Date: 05/12/2017
 * Time: 18:24
 */

namespace Application\Factory;


use Application\Utils\Underscore;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class UnderscoreFactory implements FactoryInterface
{
    /**
     * Create an object
     *
     * @param  ContainerInterface $container
     * @param  string $requestedName
     * @param  null|array $options
     * @return Underscore
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $datetimeImmutable = $container->get(\DateTimeImmutable::class);
        $manager = $container->get('doctrine.entitymanager.orm_default');

        return new Underscore($datetimeImmutable, $manager);
    }
}