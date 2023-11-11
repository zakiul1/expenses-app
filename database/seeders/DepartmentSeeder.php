<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    public function run()
    {
        // factory(Department::class, 10)->create(); // Adjust the number of records as needed
        Department::factory()->count(5)->create();
    }
}
