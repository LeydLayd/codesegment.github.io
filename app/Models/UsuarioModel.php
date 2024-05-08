<?php
namespace App\Models;

use CodeIgniter\Model;

class UsuariosModel extends Model{
    protected $table      = 'usuarios';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array'; //object
    protected $useSoftDeletes = false;

    protected $allowedFields = ['Nombre_usuario', 'Correo_electronico','Contraseña'];

    protected bool $allowEmptyInserts = false;

    public function obtenerUsuarioPorCredenciales($nombreUsuario, $contrasena)
    { 
        return $this->where('Nombre_usuario', $nombreUsuario)
                    ->where('Contrasena', $contrasena)
                    ->first();
    }

}