<?php

use \app\classes\Farm;

function addNewAnimals(array $newAnimals, Farm $farm)
{
    foreach ($newAnimals as $animal => $quantity) {

        $className = '\\app\\data\\animals\\' . ucfirst($animal);

        for ($i = 1; $i <= $quantity; $i++) {
            $farm->addAnimal(new $className(uniqid($animal)));
        }
    }
}

function showWeeklyProductsList(array $products)
{
    foreach ($products as $productType => $productQuantity) {
        echo $productType . ' - ' . $productQuantity . "\n";
    }
}

function showAnimalsList(array $animals)
{
    foreach ($animals as $animalType => $animalQuantity) {
        echo $animalType . ' - ' . $animalQuantity . "\n";
    }
}

function getWeeklyProductCollection(Farm $farm)
{
    for ($counter = 1; $counter <= 7; $counter++) {
        $farm->collectProduct();
    }
}