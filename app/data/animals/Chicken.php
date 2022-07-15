<?php

namespace app\classes\animals;

class Chicken extends Animal
{
    public const TYPE = 'chicken';
    public const PRODUCT_TYPE = 'eggs';

    public function getAnimalType()
    {
        return self::TYPE;
    }

    public function getProductType()
    {
        return self::PRODUCT_TYPE;
    }

    public function getProduct()
    {
        return random_int(0, 1);
    }
}