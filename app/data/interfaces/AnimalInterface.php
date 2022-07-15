<?php

namespace app\classes\interfaces;

interface AnimalInterface
{
    public function getId();

    public function getAnimalType();

    public function getProductType();

    public function getProduct();
}