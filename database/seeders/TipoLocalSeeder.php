<?php

namespace Database\Seeders;

use App\Models\TipoLocal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoLocalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TipoLocal::factory()->count(5)->create();
    }
}
