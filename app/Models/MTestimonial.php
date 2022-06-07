<?php

namespace App\Models;

use CodeIgniter\Model;

class MTestimonial extends Model
{
    protected $table = 'testimonial';

    protected $primaryKey = 'id_testimonial';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_testimonial', 'id_innovation', 'name_testimonial', 'description_testimonial', 'photo_testimonial'];

    protected $useTimestamps = true;
    protected $updatedField  = 'updated_at';
    protected $createdField  = 'created_at';
}