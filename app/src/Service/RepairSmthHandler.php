<?php

namespace App\Service;

use App\Entity\CategoryEnum;

class RepairSmthHandler extends AbstractHandler
{
    public function __construct(
        protected string $category = CategoryEnum::REPAIR_SMTH->value,
    ) {}

    public function getCategory(): string {
        return $this->category;
    }
}