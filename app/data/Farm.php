<?php

namespace app\classes;

use app\classes\interfaces\AnimalInterface;

class Farm
{
    private $animals;
    private $products;

    public function getAnimalTypeCount()
    {
        $animalsTypeAndQuantity = [];

        foreach ($this->animals as $animal) {
            if (empty($animalsTypeAndQuantity) || (!array_key_exists($animal->getAnimalType(), $animalsTypeAndQuantity))) {
                $animalsTypeAndQuantity[$animal->getAnimalType()] = null;
            }

            $animalsTypeAndQuantity[$animal->getAnimalType()] += 1;
        }

        return $animalsTypeAndQuantity;
    }

    public function collectProduct()
    {
        foreach ($this->animals as $animal) {
            if (empty($this->products) || (!array_key_exists($animal->getProductType(), $this->products))) {
                $this->products[$animal->getProductType()] = null;
            }

            $this->products[$animal->getProductType()] += $animal->getProduct();
        }
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function releaseProducts()
    {
        return $this->products = [];
    }

    public function addAnimal(AnimalInterface $animal)
    {
        $this->animals[] = $animal;
    }

}