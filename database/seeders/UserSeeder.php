<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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
            'name'=>'Carlos Daniel Selva',
            'email'=>'cardansel@outlook.com',
            'password'=>bcrypt('UshU8989')
        ])->assignRole('Administradores');

        //User::factory(99)->create();
    }
}
