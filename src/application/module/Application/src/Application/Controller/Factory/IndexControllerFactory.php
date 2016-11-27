<?php

namespace Application\Controller\Factory;

use Application\Controller\IndexController;
use Vendor\Module\Name\Service\TrueFalseDemo;
use Zend\ServiceManager\AbstractPluginManager;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class IndexControllerFactory
 *
 * @package Application\Controller
 */
class IndexControllerFactory
{
    /**
     * @param AbstractPluginManager $abstractPluginManager
     *
     * @return IndexController
     */
    public function __invoke(AbstractPluginManager $abstractPluginManager)
    {
        /** @var ServiceLocatorInterface $serviceLocator */
        $serviceLocator = $abstractPluginManager->getServiceLocator();

        return new IndexController($serviceLocator->get(TrueFalseDemo::class));
    }
}