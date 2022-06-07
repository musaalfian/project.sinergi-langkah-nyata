<?php

namespace App\Models;

use CodeIgniter\Model;

class MUniqueness extends Model
{
    protected $table = 'uniqueness';

    protected $primaryKey = 'id_uniqueness';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_uniqueness', 'id_innovation', 'name_uniqueness', 'description_uniqueness'];

    protected $useTimestamps = true;
    protected $updatedField  = 'updated_at';
}