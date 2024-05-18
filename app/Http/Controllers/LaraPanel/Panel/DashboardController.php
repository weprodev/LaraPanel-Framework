<?php

declare(strict_types=1);

namespace App\Http\Controllers\LaraPanel\Panel;

use WeProDev\LaraPanel\Presentation\Panel\Controller\DashboardController as LaraPanelDashboardController;

final class DashboardController extends LaraPanelDashboardController
{
    /*
    |--------------------------------------------------------------------------
    |   Dashboard CONTROLLER TO OVERWRITE IF YOU WANT
    |--------------------------------------------------------------------------
    |   baseViewPath loads from config file:larapanel.namespace.directory and Default: LaraPanel
    */

    /**
     * Below variable are available here
     * $this->baseViewPath
     */

    // public function index(): View
    // {
    //     return view("{$this->baseViewPath}.dashboard");
    // }
}
