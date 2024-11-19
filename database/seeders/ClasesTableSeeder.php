<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Clase;

class ClasesTableSeeder extends Seeder
{
    public function run()
    {
        Clase::create(['nombre' => 'Idiomas', 'profesor_id' => 1]);
        Clase::create(['nombre' => 'Arte', 'profesor_id' => 2]);
        Clase::create(['nombre' => 'Deportes', 'profesor_id' => 3]);
    }
}
