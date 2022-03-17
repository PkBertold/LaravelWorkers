<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use App\Models\Dolgozo;

class DolgozoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("dolgozo")->insert([
            "nev" => "Test Name",
            "varos" => "Budapest",
            "szuletes" => "2000.01.02",
            "fizetes" => 300000
        ]);
    }
}

class DatabaseSeeder extends Seeder
{
    public function run() {
 
    \App\Models\Dolgozo::factory(10)->create();
 
    // $this->call([
    //     StudentSeeder::class
    // ]);
    }

}
/*
class DolgozoSeeder extends Seeder
{
    public function run() {
 
    \App\Models\Dolgozo::factory(10)->create();
 
    // $this->call([
    //     StudentSeeder::class
    // ]);
    }

}
*/