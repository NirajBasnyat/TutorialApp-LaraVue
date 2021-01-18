<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ConfirmEmailTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_can_confirm_an_email()
    {
        $this->withoutExceptionHandling();

        $user = User::factory()->create();

        $this->get("register/confirm/?token={$user->confirm_token}")
            ->assertRedirect('/');
        $this->assertTrue($user->fresh()->isConfirmed());
    }

    /** @test */
    public function user_is_redirected_if_token_is_wrong()
    {
        $this->withoutExceptionHandling();

        $user = User::factory()->create();

        $this->get("register/confirm/?token=WRONG_TOKEN")
            ->assertSessionHas('error', 'Mail Confirmation failed.')
            ->assertRedirect('/');
    }
}
