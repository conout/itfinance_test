<?php

namespace App\Service;

use App\Entity\CategoryEnum;

class BarbershopHandler extends AbstractHandler
{
    public function __construct(
        protected string $category = CategoryEnum::BARBERSHOP->value,
    ) {}

    public function getCategory(): string {
        return $this->category;
    }
}