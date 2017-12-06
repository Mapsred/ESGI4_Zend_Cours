<?php
/**
 * Created by PhpStorm.
 * User: francois.mathieu
 * Date: 05/12/2017
 * Time: 18:23
 */

namespace Application\Utils;


use Application\Repository\FilmRepository;

class UnderscoreUtil
{
    /**
     * @var \DateTimeImmutable $dateTimeImmutable
     */
    public $dateTimeImmutable;

    /**
     * @var FilmRepository $filmRepository
     */
    private $filmRepository;

    /**
     * Underscore constructor.
     * @param \DateTimeImmutable $dateTimeImmutable
     * @param FilmRepository $filmRepository
     */
    public function __construct(\DateTimeImmutable $dateTimeImmutable, FilmRepository $filmRepository)
    {
        $this->dateTimeImmutable = $dateTimeImmutable;
        $this->filmRepository = $filmRepository;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getDateTimeImmutable(): \DateTimeImmutable
    {
        return $this->dateTimeImmutable;
    }

    /**
     * @return FilmRepository
     */
    public function getFilmRepository(): FilmRepository
    {
        return $this->filmRepository;
    }
}