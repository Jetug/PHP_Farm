<?php

namespace app\classes\animals;

class Cow extends Animal
{
    public const TYPE = 'cow';
    public const PRODUCT_TYPE = 'milk';

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
        return random_int(8, 12);
    }
}