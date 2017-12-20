<?php
/**
 * Created by PhpStorm.
 * User: francois.mathieu
 * Date: 05/12/2017
 * Time: 18:24
 */

namespace Application\Factory;

use Application\Repository\FilmRepository;
use Application\Utils\UnderscoreUtil;
use Doctrine\ORM\EntityManager;
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
     * @return UnderscoreUtil
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $datetimeImmutable = $container->get(\DateTimeImmutable::class);
        /** @var EntityManager $manager */
        $manager = $container->get('doctrine.entitymanager.orm_default');
        /** @var FilmRepository $filmRepository */
        $filmRepository = $manager->getRepository("Application\Entity\Film");

        return new UnderscoreUtil($datetimeImmutable, $filmRepository);
    }
}
