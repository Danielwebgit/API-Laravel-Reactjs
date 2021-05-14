<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Domain\User\Models\User;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     * @test
     */
    public function check_if_user_columns_is_correct()
    {
        $user = new User();

        $expected = [
            'name',
            'email',
            'password'
        ];
        $arrayCompared = array_diff( $expected, $user->getFillable());

        $this->assertEquals(0,count($arrayCompared));
    }
}
