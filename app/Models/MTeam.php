<?php

namespace App\Models;

use CodeIgniter\Model;

class MTeam extends Model
{
    protected $table = 'team';

    protected $primaryKey = 'id_team';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_team', 'name_team', 'motivational_words', 'position_team', 'photo_team'];
}