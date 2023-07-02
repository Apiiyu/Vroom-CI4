<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
  protected $table = 'users';
  protected $primaryKey = 'id';
  protected $useAutoIncrement = true;
  protected $returnType = 'array';
  protected $useSoftDeletes = true;
  protected $allowedFields = ['name', 'email', 'phone_number', 'password', 'profile_picture'];

  // Dates
  protected $useTimestamps = true;
  protected $dateFormat = 'datetime';
  protected $createdField = 'created_at';
  protected $updatedField = 'updated_at';
  protected $deletedField = 'deleted_at';

  // Validation
  protected $validationRules = [
    'name' => 'required',
    'email' => 'required|valid_email|is_unique[users.email]',
    'phone_number' => 'required',
    'password' => 'required|min_length[8]',
    'profile_picture' => 'uploaded[profile_picture]|max_size[profile_picture,1024]|is_image[profile_picture]|mime_in[profile_picture,image/jpg,image/jpeg,image/png]'
  ];
  protected $validationMessages = [
    'name' => [
      'required' => 'Nama harus diisi.'
    ],
    'email' => [
      'required' => 'Email harus diisi.',
      'valid_email' => 'Email tidak valid.',
      'is_unique' => 'Email sudah terdaftar.'
    ],
    'phone_number' => [
      'required' => 'Nomor telepon harus diisi.',
    ],
    'password' => [
      'required' => 'Password harus diisi.',
      'min_length' => 'Password minimal 8 karakter.'
    ],
    'profile_picture' => [
      'uploaded' => 'Foto profil harus diisi.',
      'max_size' => 'Ukuran foto profil maksimal 1MB.',
      'is_image' => 'File harus berupa gambar.',
      'mime_in' => 'File harus berupa gambar.'
    ]
  ];
  protected $skipValidation = false;
}