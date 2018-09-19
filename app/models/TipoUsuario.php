<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model{
    public $timestamps = false;
   protected $table = 'tipousuario';
   protected $fillable =[
                         'id_tipo_usuario',
                         'nombre_usuario',
                         'estado_usuario'
                        ];
  }
