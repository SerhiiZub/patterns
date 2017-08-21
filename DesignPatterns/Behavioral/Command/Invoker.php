<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 21.08.17
 * Time: 9:52
 */

namespace DesignPatterns\Behavioral\Command;


class Invoker
{
    /**
     * @var CommandInterface
     */
    private $command;

    /**
     * @param CommandInterface $cmd
     */
    public function setCommand(CommandInterface $cmd)
    {
        $this->command = $cmd;
    }

    public function run()
    {
        $this->command->execute();
    }
}