<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'name'              =>  'Rafi',
            'email'             =>  'khoirulloh.rafi@widyatama.ac.id',
            'phone_number'      =>  '082120806320',
            'password'          =>  password_hash('12345678', PASSWORD_DEFAULT),
            'profile_picture'   =>  'default.png',
        ];

        $this->db->table('users')->insert($data);
    }
}
