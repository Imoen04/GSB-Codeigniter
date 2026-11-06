<?php

namespace App\Models;

use CodeIgniter\Model;

class VisiteurModel extends Model
{
    protected $table = 'Visiteur';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['identifiant', 'email', 'password_hash'];
    protected $useTimestamps = true;
}