<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class TipoPerfil extends Model{
    public $timestamps = false;
   protected $table = 'tipoperfil';
   protected $fillable =[
                         'id_perfil',
                         'tipo_perfil',
                         'nombre_perfil'
                        ];
  }
