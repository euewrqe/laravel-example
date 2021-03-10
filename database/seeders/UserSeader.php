<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


// make seeder: php artisan make:seeder UserSeeder
// run seeder: php artisan db:seeder
// php artisan migrate:fresh --seed

class UserSeader extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        DB::table('company')->insert([
            ['company_name'=>'Wal-Mart Stores'],
            ['company_name'=>'Chevron'],

        ]);
        DB::table('person_message')->insert([
            'first_name'=>"Lamont",
            'last_name' => "Ruoss",
            'email' => "lruoss0@economist.com",
            'gender' => 'Male',
            'ip_address' => '232.81.249.17',
            'company_id'=>1
        ]);

        DB::table('person_message')->insert([
            'first_name'=>"Renaud",
            'last_name' => "Frounks",
            'email' => "rfrounks1@google.it",
            'gender' => 'Female',
            'ip_address' => '201.135.179.125',
            'company_id'=>1
        ]);
        //
    }
}
