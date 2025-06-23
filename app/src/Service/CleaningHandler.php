<?php

namespace App\Service;

use App\Entity\CategoryEnum;

class CleaningHandler extends AbstractHandler
{
    public function __construct(
        protected string $category = CategoryEnum::CLEANING->value,
    ) {}

    public function getCategory(): string {
        return $this->category;
    }
}