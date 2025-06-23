<?php

namespace App\Service;

use App\Entity\CategoryEnum;

class CarWashHandler extends AbstractHandler
{
    public function __construct(
        protected string $category = CategoryEnum::CAR_WASH->value,
    ) {}

    public function getCategory(): string {
        return $this->category;
    }
}