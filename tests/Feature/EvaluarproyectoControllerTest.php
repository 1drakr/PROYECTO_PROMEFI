<?php

namespace Tests\Feature;

use App\Models\Evaluarproyecto;
use App\Models\Solicitudproyecto;
use App\Models\Proyecto;
use App\Models\Perfil;
use App\Models\Rol;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class EvaluarproyectoControllerTest extends TestCase
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

    protected function setUp(): void
    {
        parent::setUp();

        $this->user = $this->createAdminUser();
        $this->actingAs($this->user);
    }

    /** @test */
    public function it_can_display_a_list_of_evaluarproyecto()
    {
        Log::info('Iniciando prueba it_can_display_a_list_of_evaluarproyecto');

        Evaluarproyecto::factory()->count(5)->create();

        $response = $this->get(route('evaluarproyecto.index'));

        Log::info('Respuesta del índice de evaluarproyecto: ' . $response->getStatusCode());

        $response->assertStatus(200);
        $response->assertViewHas('evaluarproyectos');
    }

    // public function it_can_show_the_create_evaluarproyecto_form()
    // {
    //     $solicitudproyecto = Solicitudproyecto::factory()->create();

    //     $response = $this->get(route('evaluarproyecto.create', ['solicitud_id' => $solicitudproyecto->id_solicitudProy]));

    //     $response->assertStatus(200);
    //     $response->assertViewIs('evaluarproyecto.create');
    // }


    // /** @test */
    // public function it_can_store_a_new_evaluarproyecto()
    // {
    //     $solicitudproyecto = Solicitudproyecto::factory()->create();

    //     $data = [
    //         'id_solicitud' => $solicitudproyecto->id_solicitudProy,
    //         'comentarios' => 'Evaluación detallada del proyecto',
    //         'puntuacion' => 8,
    //     ];

    //     $response = $this->post(route('evaluarproyecto.store'), $data);

    //     $response->assertRedirect(route('evaluarproyecto.index'));
    //     $this->assertDatabaseHas('evaluarproyecto', $data);
    // }

    // /** @test */
    // public function it_can_show_the_edit_evaluarproyecto_form()
    // {
    //     $evaluarproyecto = Evaluarproyecto::factory()->create();

    //     $response = $this->get(route('evaluarproyecto.edit', $evaluarproyecto->id_evaluarproy));

    //     $response->assertStatus(200);
    //     $response->assertViewIs('evaluarproyecto.edit');
    // }

    // /** @test */
    // public function it_can_update_an_existing_evaluarproyecto()
    // {
    //     $evaluarproyecto = Evaluarproyecto::factory()->create();

    //     $data = [
    //         'comentarios' => 'Comentarios actualizados',
    //         'puntuacion' => 9,
    //     ];

    //     $response = $this->put(route('evaluarproyecto.update', $evaluarproyecto->id_evaluarproy), $data);

    //     $response->assertRedirect(route('evaluarproyecto.index'));
    //     $this->assertDatabaseHas('evaluarproyecto', $data);
    // }

    // /** @test */
    // public function it_can_store_a_project_evaluation_with_documents()
    // {
    //     Storage::fake('public');

    //     $solicitudproyecto = Solicitudproyecto::factory()->create();

    //     $file = UploadedFile::fake()->create('document.pdf', 100, 'application/pdf');

    //     $data = [
    //         'id_solicitud' => $solicitudproyecto->id_solicitudProy,
    //         'comentarios' => 'Evaluación con documento',
    //         'puntuacion' => 7,
    //         'documento_proyecto' => $file,
    //         'documento_evaluacion' => $file,
    //     ];

    //     $response = $this->post(route('evaluarproyecto.store'), $data);

    //     $response->assertRedirect(route('evaluarproyecto.index'));
    //     $this->assertDatabaseHas('evaluarproyecto', [
    //         'id_solicitud' => $solicitudproyecto->id_solicitudProy,
    //         'comentarios' => 'Evaluación con documento',
    //         'puntuacion' => 7,
    //     ]);

    //     Storage::disk('public')->Exists('documentos_proyecto/' . $file->hashName());
    //     Storage::disk('public')->Exists('documentos_evaluacion/' . $file->hashName());
    // }
}
