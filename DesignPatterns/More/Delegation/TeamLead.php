<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 20.08.17
 * Time: 17:33
 */

namespace DesignPatterns\More\Delegation;


class TeamLead
{
    /**
     * @var JuniorDeveloper
     */
    private $junior;

    public function __construct(JuniorDeveloper $junior) {
        $this->junior = $junior;
    }

    public function writeBadCode(): string
    {
        return $this->junior->writeBadCode();
    }
}