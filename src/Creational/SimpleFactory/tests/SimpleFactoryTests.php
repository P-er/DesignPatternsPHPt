<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 21.03.2017
 * Time: 22:18
 */

namespace DesignPatternsPHPt\Creational\SimpleFactory\Tests;


use DesignPatternsPHPt\Creational\SimpleFactory\Bicycle\Bicycle;
use DesignPatternsPHPt\Creational\SimpleFactory\SimpleFactory\SimpleFactory;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTests extends TestCase

{
    function createcanCreateBicycle()
    {
        $bicycle = (new SimpleFactory())->createBicycle();
        $this->assertInstanceOf(Bicycle::class , $bicycle);
    }
}