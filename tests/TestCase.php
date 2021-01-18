<?php

namespace Tests;

use App\Models\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\Config;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function isLoggedIn()
    {
        $user = User::factory()->create();

        Config::push('custom.administrators', $user->email);

        $this->actingAs($user);
    }
}
