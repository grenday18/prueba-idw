<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i <= 10 ; $i++){
            $user = new User();
            $user->name = 'user_'.$i;
            $user->email = $user->name.'@gmail.com';
            $user->password =  hash::make('admin');
            $user->save();  
        }
    }
}
