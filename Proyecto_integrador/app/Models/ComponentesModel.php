<?php

namespace App\Models;

use CodeIgniter\Model;

class ComponentesModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'Componentes';
    protected $primaryKey       = 'idComponentes';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;
    protected $protectFields    = false;
    protected $allowedFields    = ['Tija','Amortiguador','Ruedas_Delanteras','Ruedas_Traseras',
                                    'Llantas','Cambio_Delantero','Cambio_Trasero','Casstte','Bielas','Frenos','Rotores_Frenos'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}