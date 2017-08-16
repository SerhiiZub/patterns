<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 15.08.17
 * Time: 10:58
 * require_once dirname(dirname(dirname(__DIR__))).'/autoloader.php';
 * 507 05 07 все просто
 */

namespace DesignPatterns;

spl_autoload_register(function ($className){
    $filename = str_replace("\\", '/', dirname(__DIR__).'/'.$className) . ".php";
    if (file_exists($filename)) {
        include($filename);
        if (class_exists($className)) {
            return TRUE;
        }
    }
    return FALSE;
});