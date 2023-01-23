<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //\App\Models\User::factory(5)->create();

        \App\Models\User::factory()->create([
            'name' => 'Welly Yanto',
            'userName'=> 'wellyct',
            'email' => 'welly.yanto001@binus.ac.id',
            'password' => Hash::make('password')
        ]);
        
        \App\Models\User::factory()->create([
            'name' => 'Admin User',
            'userName'=> 'admin',
            'email' => 'admin1@email.com',
            'password' => Hash::make('password')
        ]);
        
        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'userName'=> 'test1',
            'email' => 'test1@email.com',
            'password' => Hash::make('password')
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Coba User',
            'userName'=> 'coba1',
            'email' => 'coba1@email.com',
            'password' => Hash::make('password')
        ]);
    }
}
