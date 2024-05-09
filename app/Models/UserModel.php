<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    protected $table      = 'usuarios';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array'; //object
    protected $useSoftDeletes = false;

    protected $allowedFields = ['Nombre_usuario', 'Correo_electronico','Password'];

    protected bool $allowEmptyInserts = false;

}