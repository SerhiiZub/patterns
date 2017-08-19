<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 19.08.17
 * Time: 11:51
 */

use \DesignPatterns\Behavioral\ChainOfResponsibilities\LoggerExample\ConsoleLogger;
use \DesignPatterns\Behavioral\ChainOfResponsibilities\LoggerExample\Logger;
use \DesignPatterns\Behavioral\ChainOfResponsibilities\LoggerExample\FileLogger;
use \DesignPatterns\Behavioral\ChainOfResponsibilities\LoggerExample\EmailLogger;

require_once dirname(dirname(dirname(__DIR__))).'/autoloader.php';

$logger = new ConsoleLogger(Logger::NOTICE);
$file = new FileLogger(Logger::CRITICAL | Logger::DEBUG | Logger::NOTICE);
$mail = new EmailLogger(Logger::CRITICAL);

$logger->setNext($file);
$file->setNext($mail);

$logger->message('Notice message', Logger::NOTICE);
$logger->message('Debug message', Logger::DEBUG);
$logger->message('Critical error', Logger::CRITICAL);