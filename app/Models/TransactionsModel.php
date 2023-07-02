<?php 

namespace App\Models;

use CodeIgniter\Model;

class TransactionsModel extends Model {
  protected $table = 'transactions';
  protected $primaryKey = 'id';
  protected $useAutoIncrement = true;
  protected $returnType = 'array';
  protected $useSoftDeletes = true;
  protected $allowedFields = ['user_id', 'product_id', 'name', 'start_date', 'end_date', 'delivery_address', 'city', 'postal_code', 'payment'];

  // Dates
  protected $useTimestamps = true;
  protected $dateFormat = 'datetime';
  protected $createdField = 'created_at';
  protected $updatedField = 'updated_at';
  protected $deletedField = 'deleted_at';

  // Validation
  protected $validationRules = [
    'user_id' => 'required|numeric',
    'product_id' => 'required|numeric',
    'name' => 'required',
    'start_date' => 'required',
    'end_date' => 'required',
    'delivery_address' => 'required',
    'city' => 'required',
    'postal_code' => 'required',
    'payment' => 'required'
  ];
  protected $validationMessages = [
    'user_id' => [
      'required' => 'User harus diisi.',
      'numeric' => 'User harus berupa angka.'
    ],
    'product_id' => [
      'required' => 'Produk harus diisi.',
      'numeric' => 'Produk harus berupa angka.'
    ],
    'name' => [
      'required' => 'Nama harus diisi.'
    ],
    'start_date' => [
      'required' => 'Tanggal mulai harus diisi.'
    ],
    'end_date' => [
      'required' => 'Tanggal selesai harus diisi.'
    ],
    'delivery_address' => [
      'required' => 'Alamat pengiriman harus diisi.'
    ],
    'city' => [
      'required' => 'Kota harus diisi.'
    ],
    'postal_code' => [
      'required' => 'Kode pos harus diisi.'
    ],
    'payment' => [
      'required' => 'Pembayaran harus diisi.'
    ]
  ];
}