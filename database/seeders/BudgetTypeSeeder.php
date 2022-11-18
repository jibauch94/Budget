<?php

namespace Database\Seeders;

use App\Models\BudgetType;
use Illuminate\Database\Seeder;

class BudgetTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BudgetType::create([
            "name" => "Avanceret Budget", 
        ]);

        BudgetType::create([
            'name' => 'Standard Budget',
        ]);
    }
}
