<?php
/**
 * Created by PhpStorm.
 * User: francois.mathieu
 * Date: 05/12/2017
 * Time: 16:33
 */

namespace Application\Factory;


final class DateTimeImmutableFactory
{
    public function __invoke() : \DateTimeImmutable
    {
        return new \DateTimeImmutable();
    }
}