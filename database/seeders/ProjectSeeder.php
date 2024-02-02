<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([
            'titel'         => 'Coole Project Titel',
            'description'   => 'Dit is een beschrijving voor mijn coole project.',
            'active'        => true,
        ]);
    }
}