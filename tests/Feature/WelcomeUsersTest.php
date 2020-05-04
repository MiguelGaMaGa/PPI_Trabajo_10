<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /** @test */
    function it_welcomes_users_with_nickname()
    {
        $this->get('saludo/miguel/silence')
            ->assertStatus(200)
            ->assertSee('Bienvenido Miguel, tu apodo es Webmaster');
    }

    /** @test */
    function it_welcomes_users_without_nickname()
    {
        $this->get('saludo/miguel')
            ->assertStatus(200)
            ->assertSee('Bienvenido Miguel');
    }
}