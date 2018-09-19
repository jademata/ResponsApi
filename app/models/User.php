<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class User extends Model{
    public $timestamps = false;
   protected $table = 'usuario';
   protected $fillable =[
                         'id_usuario',
                         'nombre_usuario',
                         'password_usuario',
                         'email',
                         'id_tipo_usuario',
                         'id_perfil'
                        ];

  }
