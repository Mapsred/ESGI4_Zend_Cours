<?php
/**
 * Created by PhpStorm.
 * User: francois.mathieu
 * Date: 05/12/2017
 * Time: 18:23
 */

namespace Application\Utils;


use Doctrine\Common\Persistence\ObjectManager;

class Underscore
{
    /**
     * @var \DateTimeImmutable $dateTimeImmutable
     */
    public $dateTimeImmutable;

    /**
     * @var ObjectManager $manager
     */
    private $manager;

    /**
     * Underscore constructor.
     * @param \DateTimeImmutable $dateTimeImmutable
     * @param ObjectManager $manager
     */
    public function __construct(\DateTimeImmutable $dateTimeImmutable, ObjectManager $manager)
    {
        $this->dateTimeImmutable = $dateTimeImmutable;
        $this->manager = $manager;
    }
}