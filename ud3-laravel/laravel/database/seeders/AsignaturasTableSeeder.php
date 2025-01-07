<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AsignaturasTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('asignaturas')->insert([
            ['nombre' => 'Matemáticas', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Historia', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Física', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}