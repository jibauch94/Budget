<?php

namespace Database\Seeders;

use App\Models\BudgetType;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(UserTableSeeder::class);
        $this->call(BudgetTypeSeeder::class);
        $this->call(BudgetSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(SubCategoriesSeeder::class);
        $this->call(IncomeSeeder::class);
    }
}
