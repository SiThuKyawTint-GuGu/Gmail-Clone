<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name'=>'Si Thu Kyaw Tint',
            'email'=>'sithukyawtint@gmail.com',
            'phone'=>'09781255359',
            'address'=>'Hlegu',
            'role'=>'admin',
            'gender'=>'male',
            'password'=>Hash::make('sithuadmin'),
         ]);
    }
}
