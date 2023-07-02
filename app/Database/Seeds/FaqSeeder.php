<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class FaqSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'user_id'       => 1,
                'name'          => 'What if I Crash the Car?',
                'description'   => 'If you crash the car, you will be charged for the damage. The amount of the charge will be based on the damage of the car.',
            ],
            [
                'user_id'       => 1,
                'name'          => 'What if I Lost the Car?',
                'description'   => 'If you lost the car, you will be charged for the lost. The amount of the charge will be based on the price of the car.',
            ],
            [
                'user_id'       => 1,
                'name'          => 'What if I Lost the Key?',
                'description'   => 'If you lost the key, you will be charged for the lost. The amount of the charge will be based on the price of the key.',
            ],
            [
                'user_id'       => 1,
                'name'          => "Why can't get top tier?",
                'description'   => 'You can get top tier if you have 5 stars rating.',
            ],
            [
                'user_id'       => 1,
                'name'          => 'What if I get a bad rating?',
                'description'   => 'If you get a bad rating, you will be charged for the damage. The amount of the charge will be based on the damage of the car.',
            ],
            [
                'user_id'       => 1,
                'name'          => 'Why can I get a bad rating?',
                'description'   => 'You can get a bad rating if you are not following the rules.',
            ]
        ];

        foreach ($data as $item) {
            $this->db->table('faqs')->insert($item);
        }
    }
}
