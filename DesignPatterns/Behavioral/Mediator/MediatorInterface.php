<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 15.02.18
 * Time: 11:02
 */

namespace DesignPatterns\Behavioral\Mediator;


interface MediatorInterface
{
    /**
     * sends the response.
     *
     * @param string $content
     */
    public function sendResponse($content);

    /**
     * makes a request
     */
    public function makeRequest();

    /**
     * queries the DB
     */
    public function queryDb();
}