<?php

namespace app\classes\animals;

use app\classes\interfaces\AnimalInterface;

abstract class Animal implements AnimalInterface
{
    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

}