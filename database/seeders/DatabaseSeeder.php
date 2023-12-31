<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'Rony Tacatic',
            'email' => 'ronytakatik@gmail.com',
        ]);

        $role = Role::create(['name' => 'Administrador']);

        $user->assignRole($role);

         \App\Models\Parentt::factory(10)->create();
         \App\Models\Godparentt::factory(10)->create();
    }
}
