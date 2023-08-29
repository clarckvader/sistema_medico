<?php

 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
        'name' =>'Roberto Flores',
        'email' => 'Roberto@gmail.com',
        'password' => bcrypt('123456'), // password
        
        'dni' => '12345678',
        'address' => 'calle fals 123',
        'phone' => '+5552594',
        'role' => 'admin',
        ]);

        for($i= 0 ; $i<7 ; $i++){
            DB::table('work_days')->insert([
                'day' => $i,
                'active'=>($i==3),

                'morning_start'=>($i==3 ? '07:00:00' : '05:00:00'),
                'morning_end'=>($i==3 ? '09:30:00' : '05:00:00'),

                'afternoon_start'=>($i==3 ? '15:00:00' : '13:00:00'),
                'afternoon_end'=>($i==3 ? '19:30:00' : '13:00:00'),
                
                'user_id' => 1
            ]);
        }
    }
}
