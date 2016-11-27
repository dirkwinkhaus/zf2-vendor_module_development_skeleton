<?php

namespace Vendor\Module\Name;

/**
 * Class Module
 * @package Vendor\Module\Name
 */
class Module
{

    /**
     * Get module config.
     *
     * @return mixed
     */
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
}
