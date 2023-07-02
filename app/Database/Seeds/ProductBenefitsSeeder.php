<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductBenefitsSeeder extends Seeder
{
    public function run()
    {
        $data =[
            [
                'product_id'    => 1,
                'name'          => '350 Horse Power',
            ],
            [
                'product_id'    => 1,
                'name'          => '4 Seat People',
            ],
            [
                'product_id'    => 1,
                'name'          => 'Electric Car',
            ],
            [
                'product_id'    => 1,
                'name'          => 'AI Full Tracking',
            ],
            [
                'product_id'    => 1,
                'name'          => '8 Speeds AT'
            ],
            [
                'product_id'    => 1,
                'name'          => 'Semi Autopilot',
            ],
            [
                'product_id'    => 1,
                'name'          => 'Pickup Delivery',
            ],
            [
                'product_id'    => 2,
                'name'          => '350 Horse Power',
            ],
            [
                'product_id'    => 2,
                'name'          => '2 Seat People',
            ],
            [
                'product_id'    => 2,
                'name'          => 'Electric Car',
            ],
            [
                'product_id'    => 2,
                'name'          => 'AI Full Tracking',
            ],
            [
                'product_id'    => 2,
                'name'          => '8 Speeds AT'
            ],
            [
                'product_id'    => 2,
                'name'          => 'Semi Autopilot',
            ],
        ];

        foreach ($data as $item) {
            $this->db->table('product_benefits')->insert($item);
        }
    }
}
