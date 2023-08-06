<?php

namespace Database\Seeders;

use App\Models\pizzas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class pizzasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run()
    {
         pizzas::factory()->count(100)->create();
       
    }
}
