<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;

        $user->nombre="nicol";
        $user->rut="209218933";
        $user->apellido_paterno="bernal";
        $user->apellido_materno="bernal";
        $user->password="1234nicolas";
        $user->email="nicole@gmail.com";
        $user->id="1";
        $user->save();


    }
}
