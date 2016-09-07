<?php
use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
            'first_name' => 'Andrej',
            'last_name' => 'Májik',
            'nick_name' => 'admin',
            'email'    => 'a.majik7@gmail.com',
            'website'  => 'www.itam.sk',
            'password' => Hash::make('password'),
        ));
    }

}
