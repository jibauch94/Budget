<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Income;
Use Carbon\Carbon;

class IncomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $from = '2022-01-01';
        $to = '2022-12-31';
        Income::create([
            "user_id" => "1",
            "description" => "løn",
            "amount" => "100",
            "valid_from" => Carbon::createFromFormat('Y-m-d', $from),
            "valid_to" => Carbon::createFromFormat('Y-m-d', $to),
        ]);
    }
}
