<?php

namespace App\Service;

use DateTime;
use LeadGenerator\Lead;

class LeadLogger
{
    public function log(Lead $lead): void
    {
        file_put_contents(
            "log/log.txt",
            $this->makeMessage($lead) . "\n",
            FILE_APPEND
        );
    }

    public function logError(Lead $lead, string $message): void
    {
        file_put_contents(
            "log/errors.txt",
            $this->makeMessage($lead) . " | " . $message . "\n",
            FILE_APPEND
        );
    }

    private function makeMessage(Lead $lead): string {
        return $lead->id . " | " . $lead->categoryName . " | " . (new DateTime())->format("Y-m-d H:i:s");
    }
}