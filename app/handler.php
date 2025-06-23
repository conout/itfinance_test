<?php
require_once "vendor/autoload.php";

use App\Entity\CategoryEnum;
use App\Service\HandlerFactory;
use App\Service\LeadLogger;
use LeadGenerator\Lead;

/** @var Lead $lead */
$lead = unserialize($argv[1]);
$logger = new LeadLogger();

try {
    $handler = HandlerFactory::getHandler(CategoryEnum::from($lead->categoryName));

    $handler->handle($lead);
    $logger->log($lead);
} catch (Throwable $e) {
    $logger->logError($lead, $e->getMessage());
}