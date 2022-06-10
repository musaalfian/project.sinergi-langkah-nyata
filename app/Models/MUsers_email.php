<?php

namespace App\Models;

use CodeIgniter\Model;

class MUsers_email extends Model
{
    protected $table = 'users_email';

    protected $primaryKey = 'id_users_email';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_users_email', 'email'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}