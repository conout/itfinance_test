<?php

namespace App\controller;

use LeadGenerator\Generator;
use LeadGenerator\Lead;
use Symfony\Component\Process\Process;

class MainController
{
    public function index(): void
    {
        $startTime = time();
        $processes = [];

        $generator = new Generator();
        $generator->generateLeads(10000, function (Lead $lead) use (&$processes) {
            $processes[] = $this->startProcess($lead);
            // MAXIMUM_PROCESS_QUANTITY - ограничивает максимальное количество процессов, чтобы не перегружать память
            $this->waitForProcessesCompletion($processes, $_ENV['MAXIMUM_PROCESS_QUANTITY']);
        });

        $this->waitForProcessesCompletion($processes,0);

        echo 'Использовано памяти '.(memory_get_peak_usage() / 1024 / 1024).'(МБ)';
        echo '<br/>Завершено за '.(time() - $startTime).' (c)';
    }

    private function startProcess(Lead $lead): ?Process
    {
        //запускаем обработку асинхронно отдельным процессом
        $process = new Process(['php', 'handler.php', serialize($lead)]);
        $process->start();
        return $process;
    }

    private function waitForProcessesCompletion(array &$processes, int $processLimit): void
    {
        while(count($processes) > $processLimit) {
            foreach ($processes as $key => $process) {
                if(!$process->isRunning()) {
                    unset($processes[$key]);
                }
            }
            //добавим таймаут, чтобы не перегружать процессор
            usleep($_ENV['CHECK_MICROSECONDS_TIMEOUT']);
        }
    }
}