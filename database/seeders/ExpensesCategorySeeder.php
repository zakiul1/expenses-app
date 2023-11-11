<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ExpensesCategory;

class ExpensesCategorySeeder extends Seeder
{
    public function run()
    {
        // factory(ExpensesCategory::class, 10)->create(); // Adjust the number of records as needed
        ExpensesCategory::factory()->count(5)->create();
    }
}
