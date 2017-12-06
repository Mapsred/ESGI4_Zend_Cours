<?php

declare(strict_types=1);

namespace Application\Entity;

use Ramsey\Uuid\Uuid;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Film
 *
 * @package Application\Entity
 * @ORM\Table(name="films")
 * @ORM\Entity
 */
class Film
{
    /**
     * @var int $id
     * @ORM\Id
     * @ORM\Column(type="string", length=36)
     **/
    private $id;

    /**
     * @var string $title
     * @ORM\Column(type="string", length=50, nullable=false)
     */
    private $title;

    /**
     * @var string $description
     * @ORM\Column(type="text", nullable=false)
     */
    private $description = '';

    /**
     * @var User $realisator
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\User", inversedBy="films", cascade={"persist"})
     * @ORM\JoinColumn(name="realisator", referencedColumnName="id", nullable=true)
     */
    private $realisator;

    public function __construct()
    {
        $this->id = Uuid::uuid4()->toString();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Film
     */
    public function setId(int $id): Film
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Film
     */
    public function setTitle(string $title): Film
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Film
     */
    public function setDescription(string $description): Film
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return User
     */
    public function getRealisator(): User
    {
        return $this->realisator;
    }

    /**
     * @param User $realisator
     * @return Film
     */
    public function setRealisator(User $realisator): Film
    {
        $this->realisator = $realisator;

        return $this;
    }

}