<?php

namespace Tests\Feature;

use App\Models\Estado;
use App\Models\Solicitudproyecto;
use App\Models\Proyecto;
use App\Models\Perfil;
use App\Models\Rol;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class SolicitudproyectoControllerTest extends TestCase
{
    use RefreshDatabase;
    protected $user;

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

    private function ensureEstadosExist()
    {
        $estados = [
            ['id_estado' => 1, 'nombre_estado' => 'Solicitar Creacion'],
            ['id_estado' => 2, 'nombre_estado' => 'Evaluacion Pendiente'],
            ['id_estado' => 3, 'nombre_estado' => 'Validacion Pendiente'],
            ['id_estado' => 4, 'nombre_estado' => 'Finalizacion Pendiente'],
            ['id_estado' => 5, 'nombre_estado' => 'Finalizado'],
            ['id_estado' => 6, 'nombre_estado' => 'Deshabilitado'],
            ['id_estado' => 7, 'nombre_estado' => 'Habilitado'],
            ['id_estado' => 8, 'nombre_estado' => 'Solicitud atendida'],
            ['id_estado' => 9, 'nombre_estado' => 'Validacion Rechazada'],
            ['id_estado' => 10, 'nombre_estado' => 'Evaluacion Completada'],
            ['id_estado' => 11, 'nombre_estado' => 'Evaluacion Rechazada'],
            ['id_estado' => 12, 'nombre_estado' => 'Validacion Aprobada'],
            ['id_estado' => 13, 'nombre_estado' => 'Esperando Correccion'],
        ];

        foreach ($estados as $estado) {
            Estado::updateOrCreate(['id_estado' => $estado['id_estado']], $estado);
        }
    }

    protected function setUp(): void
    {
        parent::setUp();

        // Deshabilitar restricciones de claves foráneas
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Limpiar la tabla 'estado'
        Estado::truncate();

        // Asegúrate de que los estados existan
        $this->ensureEstadosExist();

        // Habilitar restricciones de claves foráneas
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Crear un usuario administrador y actuar como ese usuario
        $this->user = $this->createAdminUser();
        $this->actingAs($this->user);
    }

    /** @test */
    public function it_can_display_a_list_of_solicitudproyectos()
    {
        Solicitudproyecto::factory()->count(5)->create();

        $response = $this->get(route('solicitudproyecto.index'));

        $response->assertStatus(200);
        $response->assertViewHas('solicitudproyectos');
    }

    /** @test */
    public function it_can_show_the_create_solicitudproyecto_form()
    {
        $response = $this->get(route('solicitudproyecto.create'));

        $response->assertStatus(200);
        $response->assertViewIs('solicitudproyecto.create');
    }

    /** @test */
    public function test_evaluar_displays_correct_view_with_data()
    {
        $this->ensureEstadosExist(); // Asegúrate de que los estados existan antes de la prueba

        $proyecto = Proyecto::factory()->create();
        $user = User::factory()->create();
        $rolAdmin = Rol::factory()->create(['Nombre' => 'Administrador']);
        $rolEvaluador = Rol::factory()->create(['Nombre' => 'evaluador']); // Asegúrate de que el nombre del rol coincida

        $perfil = Perfil::factory()->create([
            'id_users' => $user->id,
            'id_rol' => $rolAdmin->id_rol,
        ]);

        $estado = Estado::find(3); // Obtener el estado existente con id 3
        $solicitudproyecto = Solicitudproyecto::factory()->create([
            'id_proyecto' => $proyecto->id_proyecto,
            'id_usuario' => $user->id,
            'id_estado' => $estado->id_estado,
        ]);

        // Crear evaluadores
        $usuariosEvaluadores = Perfil::factory()->count(3)->create(['id_rol' => $rolEvaluador->id_rol]);

        // Autenticar como el usuario
        $this->actingAs($user);

        // Hacer la solicitud
        $response = $this->get(route('solicitudproyecto.evaluar', $solicitudproyecto->id_solicitudProy));

        // Afirmaciones sobre la respuesta
        $response->assertStatus(200);
        $response->assertViewIs('solicitudproyecto.evaluar');
        $response->assertViewHas('solicitudproyecto', function ($viewSolicitudproyecto) use ($solicitudproyecto) {
            return $viewSolicitudproyecto->id_solicitudProy === $solicitudproyecto->id_solicitudProy;
        });
        $response->assertViewHas('usuariosEvaluadores', function ($viewUsuariosEvaluadores) use ($usuariosEvaluadores) {
            return $viewUsuariosEvaluadores->pluck('id_perfil')->toArray() === $usuariosEvaluadores->pluck('id_perfil')->toArray();
        });
    }

    /** @test */
    public function test_store_evaluacion_saves_evaluation_and_updates_status()
    {
        $this->ensureEstadosExist(); // Asegúrate de que los estados existan antes de la prueba

        $proyecto = Proyecto::factory()->create();
        $user = User::factory()->create();

        $solicitudproyecto = Solicitudproyecto::factory()->create([
            'id_proyecto' => $proyecto->id_proyecto,
            'id_usuario' => $user->id,
            'id_estado' => 1, // Inicial
        ]);

        $rolAdmin = Rol::factory()->create(['Nombre' => 'Administrador']);
        $perfilAdmin = Perfil::factory()->create(['id_rol' => $rolAdmin->id_rol]);

        $this->actingAs($this->user);

        $data = [
            'id_perfil' => $perfilAdmin->id_perfil,
        ];

        // Asegurarse de que el estado 'Evaluacion Pendiente' (id 2) existe
        $estadoEvaluacion = Estado::find(2);
        if (!$estadoEvaluacion) {
            $this->fail('Estado Evaluacion Pendiente no encontrado');
        }

        $response = $this->post(route('solicitudproyecto.storeEvaluacion', $solicitudproyecto->id_solicitudProy), $data);

        $this->assertDatabaseHas('evaluarproyecto', [
            'id_solicitud' => $solicitudproyecto->id_solicitudProy,
            'id_evauser' => $perfilAdmin->id_perfil,
            'id_estado' => 2, // Evaluación
        ]);

        $this->assertDatabaseHas('solicitudproyecto', [
            'id_solicitudProy' => $solicitudproyecto->id_solicitudProy,
            'id_estado' => 8, // Finalizado
        ]);

        $response->assertRedirect(route('solicitudproyecto.index'));
        $response->assertSessionHas('success', 'Evaluador asignado y estado de la solicitud cambiado correctamente');
    }
}
