<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Roger Lozada Ortiz',
            'email' => 'rogerlcolombia@gmail.com',
            'password' => bcrypt('Burusa123')
        ]);
        
        User::factory(99)->create();
    }
}
