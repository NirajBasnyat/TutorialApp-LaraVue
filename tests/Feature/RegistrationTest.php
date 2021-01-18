<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Str;
use App\Mail\ConfirmYourEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function username_is_created_during_registration()
    {
        
        $this->withoutExceptionHandling();

        $this->post('/register',[
            'name' => 'Niraj Basnet',
            'email' => 'badassbasnet@mail.com', 
            'password' => 'password',
        ])->assertRedirect();

        $this->assertDatabaseHas('users',[
            'username' => Str::slug('Niraj Basnet'),
        ]);
    }

    /** @test */
    public function user_gets_confirmation_email_after_registration()
    {
        Mail::fake();

        $this->post('/register', [
            'name' => 'Niraj Basnet',
            'email' => 'badassbasnet@mail.com',
            'password' => 'password',
        ])->assertRedirect();

        Mail::assertSent(ConfirmYourEmail::class);


    }

    /** @test */
    public function user_needs_to_confirm_during_registration()
    {
        $this->withoutExceptionHandling();

        Mail::fake();

        $this->post('/register', [
            'name' => 'Niraj Basnet',
            'email' => 'badassbasnet@mail.com',
            'password' => 'password',
        ])->assertRedirect();

        $user = User::first();

        //checks that confirm_token is not null ie filled at first.
        $this->assertNotNull($user->confirm_token);
        //to check user should not be confirmed before confirmation 
        $this->assertFalse($user->isConfirmed());
    }
}
