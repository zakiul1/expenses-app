<?php
namespace Database\Seeders;

use App\Models\Factory;
use Illuminate\Database\Seeder;

class FactoryAddSeeder extends Seeder
{
    public function run()
    {
        // factory(Department::class, 10)->create(); // Adjust the number of records as needed
        Factory::factory()->count(5)->create();
    }
}
