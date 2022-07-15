<?php

require_once 'app\data\interfaces\AnimalInterface.php';
require_once 'app\data\animals\Animal.php';
require_once 'app\data\animals\Cow.php';
require_once 'app\data\animals\Chicken.php';
require_once 'app\data\Farm.php';
require_once 'app\data\mainService.php';

use app\classes\animals\Cow;
use app\classes\animals\Chicken;
use app\classes\Farm;

$animals = [
    Cow::TYPE => 10,
    Chicken::TYPE => 20,
];

$farm = new Farm();

try {
    addNewAnimals($animals, $farm);
} catch (Throwable $e) {
    echo $e->getMessage();
    return;
}

showAnimalsList($farm->getAnimalTypeCount());
echo "\n";

getWeeklyProductCollection($farm);
showWeeklyProductsList($farm->getProducts());
echo "----------------------------";
echo "\n";

$farm->releaseProducts();

$newAnimals = [
    Cow::TYPE => 1,
    Chicken::TYPE => 5,
];

addNewAnimals($newAnimals, $farm);
showAnimalsList($farm->getAnimalTypeCount());

echo "\n";

getWeeklyProductCollection($farm);
showWeeklyProductsList($farm->getProducts());