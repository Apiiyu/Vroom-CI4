<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id'            =>  1,
                'name'          =>  'Taycan 4S',
                'full_name'     =>  'Porsche Taycan
                Mattic 67S',
                'type'          =>  'Electric Car',
                'horse_power'   =>  180,
                'speed_at'      =>  200,
                'drive_type'    =>  'FWD',
                'tracking'      =>  'GPS',
                'price'         =>  250,
                'rate'          =>  4.8,
                'image'         => 'taycan-4s.jpg',
                'created_at'    =>  date('Y-m-d H:i:s'),
                'updated_at'    =>  date('Y-m-d H:i:s')
            ],
            [
                'id'            =>  2,
                'name'          =>  '911 922 RS',
                'full_name'     =>  'Porsche 911 922 RS',
                'type'          =>  'Sport Car',
                'horse_power'   =>  150,
                'speed_at'      =>  180,
                'drive_type'    =>  'FWD',
                'tracking'      =>  'GPS',
                'price'         =>  456,
                'rate'          =>  5,
                'image'         => '911-922-rs.jpg',
                'created_at'    =>  date('Y-m-d H:i:s'),
                'updated_at'    =>  date('Y-m-d H:i:s')
            ],
            [
                'id'            =>  3,
                'name'          =>  'Macan 7s',
                'full_name'     =>  'Porsche Macan 7s',
                'type'          =>  'Family Car',
                'horse_power'   =>  200,
                'speed_at'      =>  220,
                'drive_type'    =>  'FWD',
                'tracking'      =>  'GPS',
                'price'         =>  190,
                'rate'          =>  4.3,
                'image'         => 'macan-7s.jpg',
                'created_at'    =>  date('Y-m-d H:i:s'),
                'updated_at'    =>  date('Y-m-d H:i:s')
            ],
            [
                'id'            =>  4,
                'name'          =>  'Cayman 992',
                'full_name'     =>  'Porsche Cayman 992',
                'type'          =>  'Race Car',
                'horse_power'   =>  180,
                'speed_at'      =>  200,
                'drive_type'    =>  'FWD',
                'tracking'      =>  'GPS',
                'price'         =>  899,
                'rate'          =>  4.9,
                'image'         => 'cayman-992.jpg',
                'created_at'    =>  date('Y-m-d H:i:s'),
            ],
        ];

        foreach ($data as $item) {
            $this->db->table('products')->insert($item);
        }
    }
}
