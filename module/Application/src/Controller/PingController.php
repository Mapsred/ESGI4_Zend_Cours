<?php
/**
 * Created by PhpStorm.
 * User: francois.mathieu
 * Date: 05/12/2017
 * Time: 15:10
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

final class PingController extends AbstractActionController
{
    /**
     * @var \DateTimeImmutable $dateTimeImmutable
     */
    private $dateTimeImmutable;

    /**
     * PingController constructor.
     * @param \DateTimeImmutable $dateTimeImmutable
     */
    public function __construct(\DateTimeImmutable $dateTimeImmutable)
    {
        $this->dateTimeImmutable = $dateTimeImmutable;
    }

    public function indexAction() : ViewModel
    {
        return new ViewModel([
            'content' => $this->dateTimeImmutable->format('d/m/Y H:i:s')
        ]);
    }
}