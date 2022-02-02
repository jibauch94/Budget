<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserTableSeeder extends Seeder {

    public function run() {
        User::create([
            'name' => 'test',
            'email'    => 'test10@bauch.dk',
            'password' => Hash::make('test'),
        ]);
    }
}
