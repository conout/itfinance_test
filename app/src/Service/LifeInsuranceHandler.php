<?php

namespace App\Service;

use App\Entity\CategoryEnum;

class LifeInsuranceHandler extends AbstractHandler
{
    public function __construct(
        protected string $category = CategoryEnum::LIFE_INSURANCE->value,
    ) {}

    public function getCategory(): string {
        return $this->category;
    }
}