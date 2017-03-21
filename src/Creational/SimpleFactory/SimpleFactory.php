<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 21.03.2017
 * Time: 22:10
 */

namespace DesignPatternsPHPt\Creational\SimpleFactory\SimpleFactory;
use DesignPatternsPHPt\Creational\SimpleFactory\Bicycle;

class SimpleFactory
{
    public function createBicycle(): Bicycle
    {
        return new Bicycle();
    }
}