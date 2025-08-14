<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;


class UserSeeder  extends Seeder
{
    public function run()   
    {
          // Clears the table
         DB::table('learners')->truncate(); 
        
        // DB::table('learners')->insert([
            // [
            //     'name' => 'Pushpendra Kushwaha',
            //     'age' => 23,
            //     'email' => 'jane@example.com',
            //     'address' => '123 Main Street',
            //     'city' => 'New York',
            //     'phone' => '123-456-7890',
            //     'password' => Hash::make('password123'),
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'name' => 'John Doe',
            //     'age' => 35,
            //     'email' => 'john@example.com',
            //     'address' => '456 Elm Street',
            //     'city' => 'Los Angeles',
            //     'phone' => '987-654-3210',
            //     'password' => Hash::make('password123'),
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            
            //  json file check karo 
            $json = File::get(database_path('json/users.json'));

        $users = json_decode($json, true);

        // Hash passwords and format timestamps if needed
        foreach ($users as &$user) {
            $user['password'] = Hash::make($user['password']);
            $user['created_at'] = now();
            $user['updated_at'] = now();
        }

        // Insert users into 'learners' table
        DB::table('learners')->insert($users);





        // ]);
    }
}
