<?php

namespace App\Models;

use CodeIgniter\Model;

class MProjectImpact extends Model
{
    protected $table = 'project_impact';

    protected $primaryKey = 'id_project_impact';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_project_impact', 'id_innovation', 'name_project_impact', 'description_project_impact'];

    protected $useTimestamps = true;
    protected $updatedField  = 'updated_at';
}