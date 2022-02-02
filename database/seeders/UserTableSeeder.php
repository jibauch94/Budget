<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserTableSeeder extends Seeder {

    public function run() {
        User::create([
            'username' => 'test',
            'email'    => 'test@bauch.dk',
            'password' => Hash::make('test'),
        ]);
    }
}
