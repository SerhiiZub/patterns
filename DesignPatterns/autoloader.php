<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 15.08.17
 * Time: 10:58
 */

namespace DesignPatterns;


//class Autoloader {
//    public static function loader($className) {
//        $filename = str_replace("\\", '/', $className) . ".php";
//        echo $filename.PHP_EOL;
//        if (file_exists($filename)) {
//            include($filename);
//            if (class_exists($className)) {
//                return TRUE;
//            }
//        }
//        return FALSE;
//    }
//}
spl_autoload_register(function ($className){
    $filename = str_replace("\\", '/', dirname(__DIR__).'/'.$className) . ".php";
//    echo $filename.PHP_EOL;
    if (file_exists($filename)) {
//        echo 1;
        include($filename);
        if (class_exists($className)) {
            return TRUE;
        }
    }
    return FALSE;
//    die('tut');
});