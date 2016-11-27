<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Vendor\Module\Name\Service\TrueFalseDemo;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    /** @var TrueFalseDemo */
    protected $trueFalseDemo;

    /**
     * IndexController constructor.
     *
     * @param TrueFalseDemo $trueFalseDemo
     */
    public function __construct(TrueFalseDemo $trueFalseDemo)
    {
        $this->trueFalseDemo = $trueFalseDemo;
    }

    public function indexAction()
    {
        # TrueFalseDemo service successfully loaded from vendor module
        $false = $this->trueFalseDemo->getFalse();
        $true  = $this->trueFalseDemo->getTrue();

        return new ViewModel();
    }
}
