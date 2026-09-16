<?php

namespace Codehubmvs\Abstracts\Tests\Unit;

use Codehubmvs\Abstracts\Tests\TestCase;
use Codehubmvs\Abstracts\Tests\User;

class InitialTest extends TestCase
{
    public function test_trait(): void
    {
        $result = User::methodTest();
        $this->assertSame($result, 'this ok');
    }
}
