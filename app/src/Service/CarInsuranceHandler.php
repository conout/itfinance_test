<?php

namespace App\Service;

use App\Entity\CategoryEnum;

class CarInsuranceHandler extends AbstractHandler
{
    public function __construct(
        protected string $category = CategoryEnum::CAR_INSURANCE->value,
    ) {}

    public function getCategory(): string {
        return $this->category;
    }
}