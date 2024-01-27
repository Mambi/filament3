<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonnelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('personnels')->delete();
        $personas = [array('pharmacie_id' => 1, 'nom' => "jhon", 'prenom' => 'doe', 'mobile' => '999', 'email' => 'jdoe@gmail.com', 'fonction' => 'employe')];
        DB::table('personnels')->insert($personas);
    }
}
