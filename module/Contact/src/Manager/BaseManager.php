<?php
/**
 * Created by PhpStorm.
 * User: francois.mathieu
 * Date: 19/12/2017
 * Time: 15:03
 */

namespace Contact\Manager;


use Doctrine\ORM\EntityManager;

abstract class BaseManager
{
    /**
     * @var EntityManager
     */
    private $manager;

    public function __construct(EntityManager $manager)
    {
        $this->manager = $manager;
    }

    /**
     * @return EntityManager
     */
    public function getManager(): EntityManager
    {
        return $this->manager;
    }

    /**
     * @param object $entity
     * @return BaseManager
     */
    public function persistAndFlush($entity): BaseManager
    {
        $this->getManager()->persist($entity);
        $this->getManager()->flush();

        return $this;
    }

}