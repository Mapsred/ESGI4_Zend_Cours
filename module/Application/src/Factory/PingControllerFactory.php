<?php
/**
 * Created by PhpStorm.
 * User: francois.mathieu
 * Date: 05/12/2017
 * Time: 16:29
 */

namespace Application\Factory;

use Application\Controller\PingController;
use Application\Utils\UnderscoreUtil;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class PingControllerFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return PingController
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $underscore = $container->get(UnderscoreUtil::class);

        return new PingController($underscore);
    }
}