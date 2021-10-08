<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class AddUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list=[
              [
                  'name'=>'user1','email'=>'user1@gmail.com','is_admin'=>'0','password'=>bcrypt('password'),
              ] ,
            [
                'name'=>'user2','email'=>'user2@gmail.com','is_admin'=>'0','password'=>bcrypt('password'),
            ],
            [
                'name'=>'admin','email'=>'admin@gmail.com','is_admin'=>'1','password'=>bcrypt('password'),
            ]
        ];

        foreach ($list as $user=>$value)
        {
            User::create($value);
        }
    }

}
