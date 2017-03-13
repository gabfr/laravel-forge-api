<?php

namespace Laravel\Forge\Sites\Commands\Deployment;

use Laravel\Forge\Sites\Commands\SiteResourceCommand;

class DisableDeploymentCommand extends SiteResourceCommand
{
    /**
     * Site resource path.
     *
     * @return string
     */
    public function siteResourcePath()
    {
        return 'deployment';
    }

    /**
     * HTTP request method.
     *
     * @return string
     */
    public function requestMethod()
    {
        return 'DELETE';
    }
}