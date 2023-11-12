<?php
namespace Database\Seeders;


use App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    public function run()
    {
        // factory(Department::class, 10)->create(); // Adjust the number of records as needed
        Employee::factory()->count(5)->create();
    }
}
