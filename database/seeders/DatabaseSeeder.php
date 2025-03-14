<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Car;
use App\Models\Payments;
use App\Models\Rentals;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
        User::factory(10)->create();
        Car::factory()->count(10)->create();
        Rentals::factory()->count(10)->create();
        Payments::factory()->count(10)->create();
    }
}
