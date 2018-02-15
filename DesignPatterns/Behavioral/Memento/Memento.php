<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 15.02.18
 * Time: 16:14
 */

namespace DesignPatterns\Behavioral\Memento;


class Memento
{
    /**
     * @var State
     */
    private $state;

    /**
     * @param State $stateToSave
     */
    public function __construct(State $stateToSave)
    {
        $this->state = $stateToSave;
    }

    /**
     * @return State
     */
    public function getState()
    {
        return $this->state;
    }
}