<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model {
    protected $DBGroup = 'default';
    
    protected $table = 'perfil';
    protected $primaryKey = 'RUC';

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['RUC','password'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
