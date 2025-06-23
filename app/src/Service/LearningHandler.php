<?php

namespace App\Service;

use App\Entity\CategoryEnum;

class LearningHandler extends AbstractHandler
{
    public function __construct(
        protected string $category = CategoryEnum::LEARNING->value,
    ) {}

    public function getCategory(): string {
        return $this->category;
    }
}