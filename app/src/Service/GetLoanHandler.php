<?php

namespace App\Service;

use App\Entity\CategoryEnum;

class GetLoanHandler extends AbstractHandler
{
    public function __construct(
        protected string $category = CategoryEnum::GET_LOAN->value,
    ) {}

    public function getCategory(): string {
        return $this->category;
    }
}