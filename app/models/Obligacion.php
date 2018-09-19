<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Obligacion extends Model {
    public $timestamps = false;
    protected $table ='obligacion';
    protected $fillable =[
                          'id_obligacion',
                          'nombre_obligacion',
                          'estado_obligacion',
                          'usuario_adiciono',
                          'fecha_adiciono',
                          'usuario_modifico',
                          'fecha_modifico'
                         ];
}
