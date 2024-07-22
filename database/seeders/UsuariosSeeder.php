<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Tobias Altamirano',
                'email' => 'tobias@visitway.com',
                'email_verified_at' => null,
                'password' => 'visitwayadministrador2024',
                'avatar' => null,
                'usuario_administrador' => true,
            ],
            [
                'name' => 'Lucia Riggio',
                'email' => 'lucia@visitway.com',
                'email_verified_at' => null,
                'password' => 'visitwayadministrador2024',
                'avatar' => null,
                'usuario_administrador' => true,
            ],
            [
                'name' => 'Juan Pérez',
                'email' => 'juan.perez@gmail.com',
                'email_verified_at' => null,
                'password' => 'hola12345',
                'avatar' => null,
                'usuario_administrador' => false,
            ],
            [
                'name' => 'Sofía Rodriguez',
                'email' => 'sofirodriguezz@hotmail.com',
                'email_verified_at' => null,
                'password' => 'hola12345',
                'avatar' => null,
                'usuario_administrador' => false,
            ],
            [
                'name' => 'Alberto Diorge',
                'email' => 'albertito21@gmail.com',
                'email_verified_at' => null,
                'password' => 'hola12345',
                'avatar' => null,
                'usuario_administrador' => false,
            ],
            [
                'name' => 'Martín Lamanna',
                'email' => 'martinlamm12@gmail.com',
                'email_verified_at' => null,
                'password' => 'hola12345',
                'avatar' => null,
                'usuario_administrador' => false,
            ],
            [
                'name' => 'Antonella Díaz',
                'email' => 'antonelladiazz@hotmail.com',
                'email_verified_at' => null,
                'password' => 'hola12345',
                'avatar' => null,
                'usuario_administrador' => false,
            ],
            [
                'name' => 'Agustin Mernes',
                'email' => 'mernesagustin@outlook.com',
                'email_verified_at' => null,
                'password' => 'hola12345',
                'avatar' => null,
                'usuario_administrador' => false,
            ]
        ]);
    }
}
