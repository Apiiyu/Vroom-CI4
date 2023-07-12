<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductsModel extends Model {

  protected $DBGroup = 'default';
  protected $table = 'products';

  protected $primaryKey = 'id';
  protected $useAutoIncrement = true;
  protected $returnType = 'array';
  protected $useSoftDeletes = true;
  protected $allowedFields = ['name', 'type', 'horse_power', 'speed_at', 'drive_type', 'tracking', 'price', 'rate'];

  // Dates
  protected $useTimestamps = true;
  protected $dateFormat = 'datetime';
  protected $createdField = 'created_at';
  protected $updatedField = 'updated_at';
  protected $deletedField = 'deleted_at';

  // Validation
  protected $validationRules = [
    'name' => 'required',
    'full_name' => 'required',
    'type' => 'required',
    'drive_type' => 'required',
    'tracking' => 'required',
    'image' => 'uploaded[image]|max_size[image,1024]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png]'
  ];
  protected $validationMessages = [
    'name' => [
      'required' => 'Nama harus diisi.'
    ],
    'full_name' => [
      'required' => 'Nama lengkap harus diisi.'
    ],
    'type' => [
      'required' => 'Tipe harus diisi.'
    ],
    'horse_power' => [
      'required' => 'Daya kuda harus diisi.',
      'numeric' => 'Daya kuda harus berupa angka.'
    ],
    'speed_at' => [
      'required' => 'Kecepatan harus diisi.',
      'numeric' => 'Kecepatan harus berupa angka.'
    ],
    'drive_type' => [
      'required' => 'Tipe penggerak harus diisi.'
    ],
    'tracking' => [
      'required' => 'Tracking harus diisi.'
    ],
    'price' => [
      'required' => 'Harga harus diisi.',
      'numeric' => 'Harga harus berupa angka.'
    ],
    'rate' => [
      'required' => 'Rating harus diisi.',
      'numeric' => 'Rating harus berupa angka.'
    ],
    'image' => [
      'uploaded' => 'Gambar harus diupload.',
      'max_size' => 'Ukuran gambar maksimal 1MB.',
      'is_image' => 'File harus berupa gambar.',
      'mime_in' => 'File harus berupa gambar.'
    ]
  ];

  protected $skipValidation = false;

  public function __construct()
  {
    parent::__construct();

    $this->validationRules['horse_power'] = 'required|numeric';
    $this->validationRules['speed_at'] = 'required|numeric';
    $this->validationRules['price'] = 'required|numeric';
    $this->validationRules['rate'] = 'required|numeric';
  }
}