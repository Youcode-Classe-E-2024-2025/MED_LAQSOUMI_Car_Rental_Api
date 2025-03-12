<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Car;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
        User::factory(10)->create();
        Car::factory()->count(10)->create();
    }
}
