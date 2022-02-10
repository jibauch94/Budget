<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Income;

class IncomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Income::create([
            "user_id" => "1",
            "data" => "{'income':{'name': 'Løn','value': '30000'}}",
        ]);
    }
}
