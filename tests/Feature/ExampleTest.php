<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_feed_route_works(): void
    {
        $response = $this->get('/feed');
        $response->assertStatus(200);
        $response->assertSee('Compartilhe seu código');
    }

    public function test_explorar_route_works(): void
    {
        $response = $this->get('/explorar');
        $response->assertStatus(200);
        $response->assertSee('Explorar Comunidade');
    }

    public function test_mensagens_route_works(): void
    {
        $response = $this->get('/mensagens');
        $response->assertStatus(200);
        $response->assertSee('Conversas');
    }

    public function test_perfil_route_works(): void
    {
        $response = $this->get('/perfil');
        $response->assertStatus(200);
        $response->assertSee('Minhas Publicações');
    }

    public function test_perfil_editar_route_works(): void
    {
        $response = $this->get('/perfil/editar');
        $response->assertStatus(200);
        $response->assertSee('Editar Perfil');
    }

    public function test_perfil_update_works(): void
    {
        $this->withoutMiddleware();

        $response = $this->post('/perfil/editar', [
            'name' => 'Novo Nome',
            'handle' => '@novohandle',
            'location' => 'São Paulo, SP',
            'bio' => 'Uma nova bio legal',
            'tech' => '#php #laravel',
        ]);

        $response->assertRedirect(route('perfil'));
        
        // Follow redirect to verify name was successfully stored in session and rendered
        $followResponse = $this->get(route('perfil'));
        $followResponse->assertSee('Novo Nome');
        $followResponse->assertSee('@novohandle');
        $followResponse->assertSee('São Paulo, SP');
        $followResponse->assertSee('Uma nova bio legal');
    }
}
