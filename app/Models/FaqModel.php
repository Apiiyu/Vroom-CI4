<?php

namespace App\Models;

use CodeIgniter\Model;

class FaqModel extends Model {
  protected $table = 'faq';
  protected $primaryKey = 'id';
  protected $useAutoIncrement = true;
  protected $returnType = 'array';
  protected $useSoftDeletes = true;
  protected $allowedFields = ['user_id', 'name', 'description'];

  // Dates
  protected $useTimestamps = true;
  protected $dateFormat = 'datetime';
  protected $createdField = 'created_at';
  protected $updatedField = 'updated_at';
  protected $deletedField = 'deleted_at';

  // Validation
  protected $validationRules = [
    'user_id' => 'required|numeric',
    'name' => 'required',
    'description' => 'required'
  ];
  protected $validationMessages = [
    'user_id' => [
      'required' => 'User harus diisi.',
      'numeric' => 'User harus berupa angka.'
    ],
    'name' => [
      'required' => 'Nama harus diisi.'
    ],
    'description' => [
      'required' => 'Deskripsi harus diisi.'
    ]
  ];

  public function getFaq($id) {
    if (!$id) {
      return $this->findAll();
    } else {
      return $this->where('id', $id)->first();
    }
  }
}