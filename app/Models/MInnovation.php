<?php

namespace App\Models;

use CodeIgniter\Model;

class MInnovation extends Model
{
    protected $table = 'innovation';

    protected $primaryKey = 'id_innovation';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_innovation', 'name_innovation', 'description_inovation', 'image_innovation'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}