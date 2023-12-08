<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\User;

class UserSeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create
        ([
            'name' => 'manuel M muñoz',
            'email' => 'manueloo.munozr@autonoma.edu.co',
            'password' => 'hola123',
            'age'=> '20',
        ]);

        User::create
        ([
            'name' => 'julian lopez',
            'email' => 'julian.lopez@autonoma.edu.co',
            'password' => 'adios123',
            'age'=> '20',
        ]);
    }
}
