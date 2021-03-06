<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 15.08.17
 * Time: 15:50
 */

namespace DesignPatterns\Creational\Pool;


class WorkerPool implements \Countable
{
    /**
     * @var StringReverseWorker[]
     */
    private $ocupiedWorkers = [];

    /**
     * @var StringReverseWorker[]
     */
    private $freeWorkers = [];

    public function get(): StringReverseWorker
    {
        if (count($this->freeWorkers) === 0){
            $worker = new StringReverseWorker();
        } else {
            $worker = array_pop($this->freeWorkers);
        }

        $this->ocupiedWorkers[spl_object_hash($worker)] = $worker;

        return $worker;
    }

    public function dispose(StringReverseWorker $worker)
    {
        $key = spl_object_hash($worker);

        if (isset($this->ocupiedWorkers[$key])){
            unset($this->ocupiedWorkers[$key]);
            $this->freeWorkers[$key] = $worker;
        }
    }

    public function count(): int
    {
        return count($this->ocupiedWorkers) + count($this->freeWorkers);
    }

}