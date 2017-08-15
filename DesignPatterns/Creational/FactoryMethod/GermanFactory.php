<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 15.08.17
 * Time: 15:07
 */

namespace DesignPatterns\Creational\FactoryMethod;


use \InvalidArgumentException;

class GermanFactory extends FactoryMethod
{
    protected function createVehicle(string $type): VehicleInterface
    {
        switch ($type) {
            case parent::CHEAP:
                return new Bicycle();
            case parent::FAST:
                $carMercedes = new CarMercedes();
                $carMercedes->addAMGTuning();

                return $carMercedes;
            default:
                throw new InvalidArgumentException("$type is not valid vehicle");
        }
    }

}