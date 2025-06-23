<?php

namespace App\Service;

use LeadGenerator\Lead;

interface HandlerInterface
{
    public function handle(Lead $lead) : bool;
    public function getCategory() : string;
}