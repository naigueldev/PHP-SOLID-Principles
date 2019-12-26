<?php

namespace tests\OCPTests;

use PHPUnit\Framework\TestCase;
use SRP\Logger;
use SRP\User;

class OpenClosePrincipleTest extends TestCase
{
    public function testCanBeCreatedFakeUser()
    {
        $logger = new Logger();

        $user = new User($logger);
        
        $result = $user->create(array());

        $this->assertEquals($result, "Fake Created Data");
    }
}
