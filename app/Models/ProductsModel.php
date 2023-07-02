<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductsModel extends Model {
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
  public $requiredAndNumeric = 'required|numeric';
  protected $validationRules = [
    'name' => 'required',
    'full_name' => 'required',
    'type' => 'required',
    'horse_power' => $this->requiredAndNumeric,
    'speed_at' => $this->requiredAndNumeric,
    'drive_type' => 'required',
    'tracking' => 'required',
    'price' => $this->requiredAndNumeric,
    'rate' => $this->requiredAndNumeric,
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
}