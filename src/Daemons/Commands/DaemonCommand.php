<?php

namespace Laravel\Forge\Daemons\Commands;

use Laravel\Forge\Daemons\Daemon;
use Laravel\Forge\Commands\ResourceCommand;

abstract class DaemonCommand extends ResourceCommand
{
    /**
     * Server resource path.
     *
     * @return string
     */
    public function resourcePath()
    {
        return 'daemons';
    }

    /**
     * Server resource class name.
     *
     * @return string
     */
    public function resourceClass()
    {
        return Daemon::class;
    }
}
