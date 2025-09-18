<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'admin',
                'password' => password_hash('admin123', PASSWORD_DEFAULT), // hash password
                'role'     => 'admin',
            ],
            [
                'username' => 'user1',
                'password' => password_hash('user123', PASSWORD_DEFAULT),
                'role'     => 'user',
            ],
        ];

        // Insert multiple rows
        $this->db->table('users')->insertBatch($data);
    }
}
