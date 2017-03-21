<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 21.03.2017
 * Time: 22:08
 */

namespace DesignPatternsPHPt\Creational\SimpleFactory\Bicycle;


class Bicycle
{
    public function driveTo(string $land)
    {
        echo "перемещается в $land";
    }
}