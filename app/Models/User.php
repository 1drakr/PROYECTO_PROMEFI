<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function perfil()
    {
        return $this->hasOne(Perfil::class, 'id_users', 'id');
    }
    public function assignRole($roleName)
    {
        $role = Rol::where('Nombre', $roleName)->first();

        if ($role) {
            $perfil = $this->perfil;

            if ($perfil) {
                $perfil->id_rol = $role->id_rol;
                $perfil->save();
            } else {
                $this->perfil()->create([
                    'id_rol' => $role->id_rol,
                    'Nombre' => 'Default', // Cambia esto según tus necesidades
                    'Apellido' => 'Default', // Cambia esto según tus necesidades
                ]);
            }
        }
    }

}
