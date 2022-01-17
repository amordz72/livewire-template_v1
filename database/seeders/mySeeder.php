<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;

class mySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create(
           [
            'name' => "amor",
            'email' =>'dzamor72@gmail.com',
            'password' => Hash::make('12345678'),
           ]
           );
    }
}
