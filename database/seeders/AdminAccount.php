<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminAccount extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Aveshesh KC',
            'email'=>'kcaveshesh123@gmail.com',
            'password'=>Hash::make('password'),
            'address'=>'KTM',
            'phone'=>'9824334335',
            'email_verified_at'=>now(),
            'status'=>'admin'

        ]);
    }
}
