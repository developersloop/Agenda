<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;
class Usuarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id'=>1,
            'name'=>'vitor silva',
            'email'=>'vi_dualcore@hotmail.com',
            'password'=>Hash::make('dualcore')
        ]);
    }
}
