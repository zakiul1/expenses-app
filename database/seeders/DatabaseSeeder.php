<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);

        \App\Models\User::factory()->create([
            'name' => 'Zakiul Islam',
            'email' => 'admin@gmail.com',
            'password' => '12345678',
            'role_id' => 1,
        ]);


        /* $this->call([
            DepartmentSeeder::class,
            ExpensesCategorySeeder::class,
            BankSeeder::class,
            BuyerSeeder::class,
            FactoryAddSeeder::class,

        ]); */
    }
}
