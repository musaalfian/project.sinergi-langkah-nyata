<?php

namespace App\Models;

use CodeIgniter\Model;

class MSocmed extends Model
{
    protected $table = 'social_media_team';

    protected $primaryKey = 'id_social_media';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_social_media', 'id_team', 'name_social_media', 'link_social_media'];
}
