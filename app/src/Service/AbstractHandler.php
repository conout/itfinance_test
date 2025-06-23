<?php

namespace App\Service;

use LeadGenerator\Lead;

abstract class AbstractHandler implements HandlerInterface
{
    public function handle(Lead $lead): bool
    {
        sleep(2);
        return true;
    }
}