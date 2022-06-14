<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
        Roles::create([
                    'name'=>' Super Admin',
                    'slug'=>'super admin',
                    'desc'=>'Super Power',
                 ]);
        Roles::create([
                    'name'=>'Admin',
                    'slug'=>'admin',
                    'desc'=>'main Power',
                 ]);
        Roles::create([
                    'name'=>'Editor',
                    'slug'=>'editor',
                    'desc'=>'editor Power' ,
                 ]);
        Roles::create([
                    'name'=>'Author',
                    'slug'=>'author',
                    'desc'=>'content wrritter' ,
                 ]);
    }
   
}
