<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 20.08.17
 * Time: 17:41
 */

namespace DesignPatterns\More\Delegation\Tests;


use DesignPatterns\More\Delegation\TeamLead;
use PHPUnit\Framework\TestCase;
use DesignPatterns\More\Delegation\JuniorDeveloper;

require_once dirname(dirname(dirname(__DIR__))).'/autoloader.php';

class DelegationTest extends TestCase
{
    public function testHowTeamLeadWriteCode() {
        $junior = new JuniorDeveloper();
        $team_lead = new TeamLead($junior);

        $this->assertEquals($junior->writeBadCode(), $team_lead->writeBadCode());
    }
}