<?php

namespace App\Models;

use CodeIgniter\Model;

/**
 * Modelo que representa la tabla de las redes sociales de la empresa.
 */
class SocialNetworkModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'socialnetworks';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $allowedFields    = [
        'alias',
        'name',
        'link',
        'active',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Callbacks
    protected $allowCallbacks = false;
}
