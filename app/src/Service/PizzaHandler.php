<?php

namespace App\Service;

use App\Entity\CategoryEnum;

class PizzaHandler extends AbstractHandler
{
    public function __construct(
        protected string $category = CategoryEnum::PIZZA->value,
    ) {}

    public function getCategory(): string {
        return $this->category;
    }
}