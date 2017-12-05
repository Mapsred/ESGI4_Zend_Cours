<?php
/**
 * Created by PhpStorm.
 * User: francois.mathieu
 * Date: 05/12/2017
 * Time: 16:29
 */

namespace Application\Factory;

use Application\Controller\PingController;
use Psr\Container\ContainerInterface;

class PingControllerFactory
{
    public function __invoke(ContainerInterface $container): PingController
    {
        $dateTime = $container->get(\DateTimeImmutable::class);

        return new PingController($dateTime);
    }
}