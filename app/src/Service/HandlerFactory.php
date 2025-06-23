<?php

namespace App\Service;

use App\Entity\CategoryEnum;

class HandlerFactory
{
    static public function getHandler($category): HandlerInterface {
        return match ($category) {
            CategoryEnum::BUY_AUTO => new BuyAutoHandler(),
            CategoryEnum::BUY_HOUSE => new BuyHouseHandler(),
            CategoryEnum::GET_LOAN => new GetLoanHandler(),
            CategoryEnum::CLEANING => new CleaningHandler(),
            CategoryEnum::LEARNING => new LearningHandler(),
            CategoryEnum::CAR_WASH => new CarWashHandler(),
            CategoryEnum::REPAIR_SMTH => new RepairSmthHandler(),
            CategoryEnum::BARBERSHOP => new BarbershopHandler(),
            CategoryEnum::PIZZA => new PizzaHandler(),
            CategoryEnum::CAR_INSURANCE  => new CarInsuranceHandler(),
            //допустим, эта категория не обрабатывается
            //CategoryEnum::LIFE_INSURANCE  => new LifeInsuranceHandler(),
        };
    }
}