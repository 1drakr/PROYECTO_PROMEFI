<?php
namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;
use App\Models\Perfil;
use App\Models\Rol;

class PagesTest extends DuskTestCase
{
    public function testLogin()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->waitFor('#email', 10)
                    ->type('email', 'frankpaz@gmail.com')
                    ->waitFor('input[name=password]', 10)
                    ->type('password', 'kevin123')
                    ->press('#login-btn')
                    ->assertPathIs('/home')
                    ->assertSee('Dashboard');
        });
    }

    public function testAdminPages()
    {

        $this->browse(function (Browser $browser) {
            $browser->visit('/rol')->assertSee('Roles')
                    ->visit('/perfil')->assertSee('Perfiles')
                    ->visit('/proyecto')->assertSee('Proyectos')
                    ->visit('/recompensa')->assertSee('Recompensas')
                    ->visit('/complemento')->assertSee('Complementos')
                    ->visit('/historium')->assertSee('Historias')
                    ->visit('/preguntafrecuente')->assertSee('Preguntas Frecuentes')
                    ->visit('/persona')->assertSee('Personas')
                    ->visit('/colaborador')->assertSee('Colaboradores')
                    ->visit('/pago')->assertSee('Pagos')
                    ->visit('/solicitudproyecto')->assertSee('Solicitudes de Proyecto')
                    ->visit('/evaluarproyecto')->assertSee('Evaluar Proyecto')
                    ->visit('/validacionproyecto')->assertSee('Validación de Proyecto')
                    ->visit('/finalizacionproyecto')->assertSee('Finalización de Proyecto')
                    ->visit('/pagopatrocinador')->assertSee('Pago Patrocinador')
                    ->visit('/pagocreador')->assertSee('Pago Creador')
                    ->visit('/estado')->assertSee('Estados')
                    ->visit('/comentario')->assertSee('Comentarios');
        });
    }
    // public function testEvaluadorPages()
    // {
    //     $user = User::factory()->create();
    //     $rol = Rol::where('Nombre', 'Evaluador')->first();
    //     $perfil = Perfil::factory()->create([
    //         'id_users' => $user->id,
    //         'id_rol' => $rol->id_rol,
    //         'Nombre' => 'Evaluador',
    //         'Apellido' => 'User'
    //     ]);

    //     $this->browse(function (Browser $browser) use ($user) {
    //         $browser->loginAs($user)
    //                 ->visit('/evaluarproyecto')->assertSee('Evaluar Proyecto');
    //     });
    // }

    // public function testCreadorPages()
    // {
    //     $user = User::factory()->create();
    //     $rol = Rol::where('Nombre', 'Creador')->first();
    //     $perfil = Perfil::factory()->create([
    //         'id_users' => $user->id,
    //         'id_rol' => $rol->id_rol,
    //         'Nombre' => 'Creador',
    //         'Apellido' => 'User'
    //     ]);

    //     $this->browse(function (Browser $browser) use ($user) {
    //         $browser->loginAs($user)
    //                 ->visit('/proyecto')->assertSee('Proyectos')
    //                 ->visit('/solicitudproyecto')->assertSee('Solicitudes de Proyecto');
    //     });
    // }

    // public function testUsuarioPages()
    // {
    //     $user = User::factory()->create();
    //     $rol = Rol::where('Nombre', 'Usuario')->first();
    //     $perfil = Perfil::factory()->create([
    //         'id_users' => $user->id,
    //         'id_rol' => $rol->id_rol,
    //         'Nombre' => 'Usuario',
    //         'Apellido' => 'User'
    //     ]);

    //     $this->browse(function (Browser $browser) use ($user) {
    //         $browser->loginAs($user)
    //                 ->visit('/proyecto')->assertSee('Proyectos');
    //     });
    // }

    // public function testDonadorPages()
    // {
    //     $user = User::factory()->create();
    //     $rol = Rol::where('Nombre', 'Donador')->first();
    //     $perfil = Perfil::factory()->create([
    //         'id_users' => $user->id,
    //         'id_rol' => $rol->id_rol,
    //         'Nombre' => 'Donador',
    //         'Apellido' => 'User'
    //     ]);

    //     $this->browse(function (Browser $browser) use ($user) {
    //         $browser->loginAs($user)
    //                 ->visit('/pagopatrocinador')->assertSee('Pago Patrocinador')
    //                 ->visit('/pagocreador')->assertSee('Pago Creador');
    //     });
    // }
}
