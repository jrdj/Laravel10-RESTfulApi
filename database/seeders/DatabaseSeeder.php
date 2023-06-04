<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Sale;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       Task::factory(10)->create();
   
       DB::table('users')->insert([[
        'name'=> 'Jrdj',
        'email'=> 'Jrdj@gmail.com',
        'password'=> Hash::make('123123')
       ],
       [
         'name'=> 'Micha',
         'email'=> 'Micha@gmail.com',
         'password'=> Hash::make('qweqwe')
       ],]
      );

      //Sales references to users id
      Sale::factory(20)->create();
    }
}
