<?php

namespace App\Models;

use CodeIgniter\Model;

class MTagline extends Model
{
    protected $table = 'tagline';

    protected $primaryKey = 'id_tagline';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_tagline', 'tagline', 'description_tagline', 'image_tagline', 'about_us'];
}