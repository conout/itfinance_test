<?php

namespace App\Service;

use App\Entity\CategoryEnum;

class BuyAutoHandler extends AbstractHandler
{
    public function __construct(
        protected string $category = CategoryEnum::BUY_AUTO->value,
    ) {}

    public function getCategory(): string {
        return $this->category;
    }
}