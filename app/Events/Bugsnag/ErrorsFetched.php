<?php

namespace App\Events\Bugsnag;

use App\Events\DashboardEvent;

class ErrorsFetched extends DashboardEvent
{
    /** @var array */
    public $errors;

    public function __construct(array $errors)
    {
        $this->errors = $errors;
    }
}
