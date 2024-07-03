<?php

namespace Tests\Feature;

use App\Models\Proyecto;
use App\Models\Estado;
use App\Models\Solicitudproyecto;
use App\Models\Historia;
use App\Models\Recompensa;
use App\Models\Perfil;
use App\Models\User;
use App\Models\Rol;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProyectoControllerTest extends TestCase
{
    use RefreshDatabase;

    private function createAdminUser(): User
    {
        $adminRole = Rol::factory()->create(['Nombre' => 'Administrador']);
        $user = User::factory()->create();
        Perfil::factory()->create([
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

        // Crear estados necesarios usando factories
        Estado::factory()->create([
            'id_estado' => 6,
            'nombre_estado' => 'Estado requerido',
        ]);

        Estado::factory()->create([
            'id_estado' => 1,
            'nombre_estado' => 'Solicitar Creacion',
        ]);
    }

    /** @test */
    public function it_can_display_a_list_of_proyectos()
    {
        Proyecto::factory()->count(3)->create();

        $response = $this->get(route('proyecto.index'));

        $response->assertStatus(200);
        $response->assertViewIs('proyecto.index');
        $response->assertViewHas('proyectos');
    }

    /** @test */
    public function it_can_show_the_create_proyecto_form()
    {
        $response = $this->get(route('proyecto.create'));

        $response->assertStatus(200);
        $response->assertViewIs('proyecto.create');
    }

    /** @test */
    /** @test */
/** @test */
    public function it_can_create_a_new_proyecto()
    {
        $proyectoData = Proyecto::factory()->make()->toArray();
        $historiaData = Historia::factory()->make()->toArray();
        $recompensaData = Recompensa::factory()->make()->toArray();

        $data = array_merge($proyectoData, [
            'historia_titulo' => $historiaData['titulo'],
            'historia_texto' => $historiaData['texto'],
            'recompensa_titulo' => $recompensaData['titulo'],
            'recompensa_monto' => $recompensaData['monto'],
            'recompensa_descripcion' => $recompensaData['descripcion'],
            'recompensa_envio' => $recompensaData['envio'],
            'recompensa_fecha_entrega' => $recompensaData['fecha_entrega'],
            'recompensa_cantidad' => $recompensaData['cantidad'],
            'recompensa_tiempo_oferta' => $recompensaData['tiempo_oferta'],
        ]);

        $response = $this->post(route('proyecto.store'), $data);

        $response->assertRedirect(route('proyecto.index'));
        $response->assertSessionHas('success', 'Proyecto created successfully.');
        $this->assertDatabaseHas('proyecto', ['titulo' => $proyectoData['titulo']]);
    }

    // public function it_can_finalize_a_proyecto()
    // {
    //     // Crear los datos necesarios
    //     $estado = Estado::factory()->create(['id_estado' => 3]);
    //     $perfil = Perfil::factory()->create();
    //     $proyecto = Proyecto::factory()->create([
    //         'id_estado' => 3,
    //         'monto_meta' => 1000,
    //         'recaudado' => 1200, // Ajusta según sea necesario para tu prueba
    //         'id_perfil' => $perfil->id_perfil,
    //     ]);

    //     // Crear los datos relacionados para solicitudproyectos y evaluarproyectos
    //     $solicitudProyecto = Solicitudproyecto::factory()->create(['id_proyecto' => $proyecto->id_proyecto]);
    //     $evaluarProyecto = EvaluarProyecto::factory()->create(['id_solicitud' => $solicitudProyecto->id_solicitud]);

    //     // Actuar como usuario autenticado
    //     $this->actingAs($this->createAdminUser());

    //     // Realizar la solicitud para finalizar el proyecto
    //     $response = $this->put(route('proyecto.finalizar', $proyecto->id_proyecto));

    //     // Verificar la respuesta y el estado del proyecto
    //     $response->assertRedirect(route('proyecto.index'));
    //     $response->assertSessionHas('success', 'Proyecto created successfully.');

    //     $this->assertDatabaseHas('proyecto', [
    //         'id_proyecto' => $proyecto->id_proyecto,
    //         'id_estado' => 4, // Asegúrate de que el estado es correcto
    //     ]);

    //     // Verificar que se ha creado una entrada en finalizacionproyecto
    //     $this->assertDatabaseHas('finalizacionproyecto', [
    //         'id_proyecto' => $proyecto->id_proyecto,
    //         'id_perfil' => $evaluarProyecto->id_evauser,
    //     ]);
    // }
}
