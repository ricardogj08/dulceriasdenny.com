<?php

namespace App\Models;

use CodeIgniter\Model;

/**
 * Modelo que representa la tabla de Pop Ups.
 */
class PopUpModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'popups';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $allowedFields    = [
        'name',
        'image',
        'active',
        'finished_at',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Validation
    protected $skipValidation       = true;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = false;
}
