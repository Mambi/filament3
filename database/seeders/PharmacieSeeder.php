<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PharmacieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pharmacies')->delete();
        $pharms = [array('id' => 1, 'nom' => "Bombuflat", 'adresse' => '---', 'telephone' => '112', 'email' => 'bombuflat@gmail.com')];
        DB::table('pharmacies')->insert($pharms);
    }
}
