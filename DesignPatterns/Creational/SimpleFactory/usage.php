<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 15.08.17
 * Time: 17:27
 */

use DesignPatterns\Creational\SimpleFactory\SimpleFactory;
require_once dirname(dirname(__DIR__)).'/autoloader.php';

$factory = new SimpleFactory();
$bicycle = $factory->createBicycle();
$bicycle->driveTo('Paris');