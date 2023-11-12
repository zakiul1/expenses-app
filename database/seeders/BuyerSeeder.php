<?php
namespace Database\Seeders;

use App\Models\Bank;
use App\Models\Buyer;
use Illuminate\Database\Seeder;

class BuyerSeeder extends Seeder
{
    public function run()
    {
        // factory(Department::class, 10)->create(); // Adjust the number of records as needed
        Buyer::factory()->count(5)->create();
    }
}
