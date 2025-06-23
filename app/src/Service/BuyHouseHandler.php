<?php

namespace App\Service;

use App\Entity\CategoryEnum;

class BuyHouseHandler extends AbstractHandler
{
    public function __construct(
        protected string $category = CategoryEnum::BUY_HOUSE->value,
    ) {}

    public function getCategory(): string {
        return $this->category;
    }
}