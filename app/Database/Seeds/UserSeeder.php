<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Mujtaba Siddiqui',
                'email' => 'mujtaba_test@yopmail.com',
                'password' => password_hash('12345', PASSWORD_DEFAULT),
            ],
            [
                'name' => 'User Two',
                'email' => 'usertesttwo@yopmail.com',
                'password' => password_hash('123456', PASSWORD_DEFAULT),
            ],
            [
                'name' => 'User Three',
                'email' => 'usertestthree@yopmail.com',
                'password' => password_hash('123456', PASSWORD_DEFAULT),
            ],
        ];

        $this->db->table('users')->insertBatch($data);
    }
}
