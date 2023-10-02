<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Box;

class BoxesTableSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     */
    public function run()
    {
          Box::create([
               'name' => 'Box 1',
               'genre_id' => 1,
               'description' => 'Best box in town',
           ]);
    }
}

//command to seed the inital data php artisan db:seed --class=BoxesTableSeeder