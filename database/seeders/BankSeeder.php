<?php
namespace Database\Seeders;

use App\Models\Bank;
use Illuminate\Database\Seeder;

class BankSeeder extends Seeder
{
    public function run()
    {
        // factory(Department::class, 10)->create(); // Adjust the number of records as needed
        Bank::factory()->count(5)->create();
    }
}
