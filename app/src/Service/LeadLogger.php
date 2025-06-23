<?php

namespace App\Service;

use DateTime;
use LeadGenerator\Lead;

class LeadLogger
{
    public function log(Lead $lead): void
    {
        $this->checkOrCreateLogFile("log/log.txt");

        file_put_contents(
            "log/log.txt",
            $this->makeMessage($lead) . "\n",
            FILE_APPEND
        );
    }

    public function logError(Lead $lead, string $message): void
    {
        $this->checkOrCreateLogFile("log/errors.txt");

        file_put_contents(
            "log/errors.txt",
            $this->makeMessage($lead) . " | " . $message . "\n",
            FILE_APPEND
        );
    }

    private function makeMessage(Lead $lead): string {
        return $lead->id . " | " . $lead->categoryName . " | " . (new DateTime())->format("Y-m-d H:i:s");
    }

    private function checkOrCreateLogFile(string $filePath): void
    {
        if (!is_dir("log")) {
            mkdir("log", 0777, true);
        }

        if (!file_exists($filePath)) {
            touch($filePath);
            chmod($filePath, 0777);
        }
    }
}