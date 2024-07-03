<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use App\Models\Rol;
use App\Models\Perfil;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class RolControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Create an admin user.
     *
     * @return \App\Models\User
     */
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

    /** @test */
    public function admin_can_view_roles_list()
    {
        $admin = $this->createAdminUser();
        Rol::factory()->count(15)->create();

        $response = $this->actingAs($admin)->get('/rol');

        $response->assertStatus(200);
        $response->assertViewIs('rol.index');
        $response->assertViewHas('rols');
    }

    /** @test */
    public function admin_can_create_a_role()
    {
        $admin = $this->createAdminUser();
        $rolData = Rol::factory()->make()->toArray();

        $response = $this->actingAs($admin)->post('/rol', $rolData);

        $response->assertRedirect('/rol');
        $this->assertDatabaseHas('rol', $rolData);
    }
}
