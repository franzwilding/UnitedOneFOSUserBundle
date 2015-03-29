<?php

namespace United\OneFOSUserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class UnitedOneFOSUserBundle extends Bundle
{
    /**
     * Returns the bundle parent name.
     *
     * @return string The Bundle parent name it overrides or null if no parent
     *
     * @api
     */
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
