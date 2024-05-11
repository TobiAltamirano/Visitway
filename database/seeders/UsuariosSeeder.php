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
                'name' => 'Tobias',
                'email' => 'tobias@davinci',
                'email_verified_at' => null,
                'password' => 'hola12345',
                'avatar' => null,
                'usuario_administrador' => true,
            ],

        ]);
    }
}
