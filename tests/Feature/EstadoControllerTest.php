<?php

namespace Tests\Feature;

use App\Models\Estado;
use App\Models\Rol;
use App\Models\Perfil;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EstadoControllerTest extends TestCase
{
    use RefreshDatabase;

    private function createAdminUser(): User
    {
        $adminRole = Rol::create(['Nombre' => 'Administrador']);
        $user = User::factory()->create();
        Perfil::create([
            'id_users' => $user->id,
            'Nombre' => $user->name,
            'Apellido' => 'Admin',
            'id_rol' => $adminRole->id_rol,
        ]);
        return $user;
    }

    protected function setUp(): void
    {
        parent::setUp();
        $this->actingAs($this->createAdminUser());
    }

    /** @test */
    public function it_can_display_a_list_of_estados()
    {
        Estado::factory()->count(3)->create();

        $response = $this->get(route('estado.index'));

        $response->assertStatus(200);
        $response->assertViewIs('estado.index');
        $response->assertViewHas('estados');
    }

    /** @test */
    public function it_can_show_the_create_estado_form()
    {
        $response = $this->get(route('estado.create'));

        $response->assertStatus(200);
        $response->assertViewIs('estado.create');
    }

    /** @test */
    public function it_can_create_a_new_estado()
    {
        $data = Estado::factory()->make()->toArray();

        $response = $this->post(route('estado.store'), $data);

        $response->assertRedirect(route('estado.index'));
        $response->assertSessionHas('success', 'Estado created successfully.');
        $this->assertDatabaseHas('estado', $data);
    }

    /** @test */
    public function it_can_display_an_estado()
    {
        $estado = Estado::factory()->create();

        $response = $this->get(route('estado.show', $estado));

        $response->assertStatus(200);
        $response->assertViewIs('estado.show');
        $response->assertViewHas('estado', $estado);
    }

    /** @test */
    public function it_can_show_the_edit_estado_form()
    {
        $estado = Estado::factory()->create();

        $response = $this->get(route('estado.edit', $estado));

        $response->assertStatus(200);
        $response->assertViewIs('estado.edit');
        $response->assertViewHas('estado', $estado);
    }

    /** @test */
    public function it_can_update_an_estado()
    {
        $estado = Estado::factory()->create();
        $data = Estado::factory()->make()->toArray();

        $response = $this->put(route('estado.update', $estado), $data);

        $response->assertRedirect(route('estado.index'));
        $response->assertSessionHas('success', 'Estado updated successfully.');
        $this->assertDatabaseHas('estado', $data);
    }

    /** @test */
    public function it_can_delete_an_estado()
    {
        $estado = Estado::factory()->create();

        $response = $this->delete(route('estado.destroy', $estado));

        $response->assertRedirect(route('estado.index'));
        $response->assertSessionHas('success', 'Estado deleted successfully.');
        $this->assertModelMissing($estado);
    }
}
