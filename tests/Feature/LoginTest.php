<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_cannot_login_without_correct_credentials()
    {
        // $this->withoutExceptionHandling(); -> commented as we need exception handling in this one 

        $user = User::factory()->create();

        $this->postJson('/login', [
            'email' => $user->email,
            'password' => 'random'
        ])->assertStatus(422)
            ->assertJson(['message' => 'These credentials do not match out records.']); //from AuthFailedException
    }

    /** @test */
    public function user_can_login_with_correct_credentials()
    {
        $user = User::factory()->create();

        $this->postJson('/login', [
            'email' => $user->email,
            'password' => 'password',
        ])->assertStatus(200)
            ->assertSessionHas('success', 'You are authenticated') //from authenticated method in login
            ->assertJson(['status' => 'ok']);
    }
}
