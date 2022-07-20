<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =[

            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'username' => 'admin',
                'roles'=>'admin',
                'email_verified_at' => date('Y-m-d H:i:s',time()),
                'password' => \bcrypt('password'),
            ],
            [
                'name' => 'imam prasaja',
                'email' => 'imam@imam.com',
                'username' => '13118276',
                'kelas' => '4KA04',
                'npm' => '13118276',
                'roles'=>'user',
                'email_verified_at' => date('Y-m-d H:i:s',time()),
                'password' => \bcrypt('13118276'),
            ],

        ];

        foreach ($user as $key => $user) {
            User::create($user);
        }
    }
}
