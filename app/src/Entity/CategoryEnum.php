<?php

namespace App\Entity;

enum CategoryEnum: string
{
    case BUY_AUTO = 'Buy auto';
    case BUY_HOUSE = 'Buy house';
    case GET_LOAN = 'Get loan';
    case CLEANING = 'Cleaning';
    case LEARNING = 'Learning';
    case CAR_WASH = 'Car wash';
    case REPAIR_SMTH = 'Repair smth';
    case BARBERSHOP = 'Barbershop';
    case PIZZA = 'Pizza';
    case CAR_INSURANCE = 'Car insurance';
    case LIFE_INSURANCE = 'Life insurance';
}
