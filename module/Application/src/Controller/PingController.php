<?php
/**
 * Created by PhpStorm.
 * User: francois.mathieu
 * Date: 05/12/2017
 * Time: 15:10
 */

namespace Application\Controller;

use Application\Utils\Underscore;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

final class PingController extends AbstractActionController
{
    /**
     * @var Underscore
     */
    private $underscore;

    /**
     * PingController constructor.
     * @param Underscore $underscore
     */
    public function __construct(Underscore $underscore)
    {
        $this->underscore = $underscore;
    }

    public function indexAction() : ViewModel
    {
        return new ViewModel([
            'content' => $this->underscore->dateTimeImmutable->format('d/m/Y H:i:s')
        ]);
    }
}