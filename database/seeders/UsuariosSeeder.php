<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
                'password' => Hash::make('visitwayadministrador2024'),
                'avatar' => 'avatar1.png',
                'usuario_administrador' => true,
            ],
            [
                'name' => 'Lucía Riggio',
                'email' => 'lucia@visitway.com',
                'email_verified_at' => null,
                'password' => Hash::make('visitwayadministrador2024'),
                'avatar' => 'avatar6.png',
                'usuario_administrador' => true,
            ],
            [
                'name' => 'Juan Pérez',
                'email' => 'juan.perez@gmail.com',
                'email_verified_at' => null,
                'password' => Hash::make('hola12345'),
                'avatar' => 'avatar1.png',
                'usuario_administrador' => false,
            ],
            [
                'name' => 'Sofía Rodríguez',
                'email' => 'sofirodriguezz@hotmail.com',
                'email_verified_at' => null,
                'password' => Hash::make('hola12345'),
                'avatar' => 'avatar4.png',
                'usuario_administrador' => false,
            ],
            [
                'name' => 'Alberto Diorge',
                'email' => 'albertito21@gmail.com',
                'email_verified_at' => null,
                'password' => Hash::make('hola12345'),
                'avatar' => 'avatar2.png',
                'usuario_administrador' => false,
            ],
            [
                'name' => 'Martín Lamanna',
                'email' => 'martinlamm12@gmail.com',
                'email_verified_at' => null,
                'password' => Hash::make('hola12345'),
                'avatar' => 'avatar5.png',
                'usuario_administrador' => false,
            ],
            [
                'name' => 'Antonella Díaz',
                'email' => 'antonelladiazz@hotmail.com',
                'email_verified_at' => null,
                'password' => Hash::make('hola12345'),
                'avatar' => 'avatar5.png',
                'usuario_administrador' => false,
            ],
            [
                'name' => 'Agustín Mernes',
                'email' => 'mernesagustin@outlook.com',
                'email_verified_at' => null,
                'password' => Hash::make('hola12345'),
                'avatar' => 'avatar3.png',
                'usuario_administrador' => false,
            ]
        ]);
    }
}
