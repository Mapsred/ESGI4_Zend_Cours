<?php
/**
 * Created by PhpStorm.
 * User: francois.mathieu
 * Date: 05/12/2017
 * Time: 15:10
 */

namespace Application\Controller;

use Application\Utils\UnderscoreUtil;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

final class PingController extends AbstractActionController
{
    /**
     * @var UnderscoreUtil
     */
    private $underscore;

    /**
     * PingController constructor.
     * @param UnderscoreUtil $underscore
     */
    public function __construct(UnderscoreUtil $underscore)
    {
        $this->underscore = $underscore;
    }

    public function indexAction(): ViewModel
    {
        return new ViewModel([
            'content' => $this->underscore->dateTimeImmutable->format('d/m/Y H:i:s')
        ]);
    }

    public function filmsAction(): ViewModel
    {
        return new ViewModel([
            'films' => $this->underscore->getFilmRepository()->findAll()
        ]);
    }
}