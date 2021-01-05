<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Str;
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
}
