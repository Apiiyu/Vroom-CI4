<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductBenfitsModel extends Model {
  protected $table = 'product_benefits';
  protected $primaryKey = 'id';
  protected $useAutoIncrement = true;
  protected $returnType = 'array';
  protected $useSoftDeletes = true;
  protected $allowedFields = ['product_id', 'name'];

  // Dates
  protected $useTimestamps = true;
  protected $dateFormat = 'datetime';
  protected $createdField = 'created_at';
  protected $updatedField = 'updated_at';
  protected $deletedField = 'deleted_at';

  // Validation
  protected $validationRules = [
    'product_id' => 'required|numeric',
    'name' => 'required'
  ];
  protected $validationMessages = [
    'product_id' => [
      'required' => 'Produk harus diisi.',
      'numeric' => 'Produk harus berupa angka.'
    ],
    'name' => [
      'required' => 'Nama harus diisi.'
    ]
  ];

  public function getBenefits($productId) {
    return $this->where('product_id', $productId)->findAll();
  }
}