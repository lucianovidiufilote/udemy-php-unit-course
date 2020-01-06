<?php

use PHPUnit\Framework\TestCase;

/**
 * @runTestsInSeparateProcesses
 * @preserveGlobalState disabled
 */
class User2Test extends TestCase
{
    public function tearDown(): void
    {
        Mockery::close();
    }


    public function testNotifyReturnsTrue()
    {
        $user = new User2('dave@example.com');

        $mock = Mockery::mock('alias:Mailer2');

        $mock->shouldReceive('send')
            ->once()
            ->with($user->email, 'Hello!')
            ->andReturn(true);

        $this->assertTrue($user->notify('Hello!'));
    }


}