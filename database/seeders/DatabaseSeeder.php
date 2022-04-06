<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
        $user = new User();
        $user->username='admin';
        $user->password=Hash::make('admin');
        $user->email='admin@admin.com';
        $user->rol='admin';

        $user->save();
    }
}
