<?php

namespace App\Models;

use CodeIgniter\Model;

class RemboursementModel extends Model
{
    protected $table = 'remboursements';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = [
        'user_id',
        'etapes',
        'nuitees',
        'kilometres',
        'repas',
        'date_depense',
    ];
    protected $useTimestamps = true;
    protected $updatedField = '';
}