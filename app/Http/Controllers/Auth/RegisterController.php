<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Perfil;
use App\Models\Rol;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{

    use RegistersUsers;

    protected $redirectTo = '/home';
    public function __construct()
    {
        $this->middleware('guest');
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        // Obtener el rol de usuario por defecto
        $rolUsuario = Rol::where('Nombre', 'Usuario')->first();
        // Dividir el nombre completo en nombre y apellido
        $nameParts = explode(' ', $data['name'], 2);
        $nombre = $nameParts[0];
        $apellido = isset($nameParts[1]) ? $nameParts[1] : '';

        // Crear el perfil asociado al usuario
        Perfil::create([
            'id_users' => $user->id,
            'Nombre' => $nombre,
            'Apellido' => $apellido,
            'id_rol' => $rolUsuario->id_rol,
            // Otros campos del perfil pueden ser rellenados aquí si es necesario
        ]);

        return $user;
    }
}
