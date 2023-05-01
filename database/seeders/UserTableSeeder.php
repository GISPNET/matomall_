<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table('users')->insert([
            'name'=>'admin',
            'email'=>'admin@marketplace.com',
            'email_verified_at'=>now(),
            'password'=>Hash::make('admin')
        ]);*/
        factory(\App\Models\User::class,40)->create();
    }
}
