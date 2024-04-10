<?php

namespace Database\Seeders;

use App\Models\TipoActividad;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Definimos los seeders a ejecutarse, y en que orden
        $this->call(ProvinciaSeeder::class);

        $this->call(TipoAlojamientoSeeder::class);
        $this->call(TipoGastronomiaSeeder::class);
        $this->call(TipoActividadSeeder::class);
        
        $this->call(AlojamientoSeeder::class);
        $this->call(GastronomiaSeeder::class);
        $this->call(ActividadSeeder::class);

        

        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
