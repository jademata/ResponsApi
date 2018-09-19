<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model {
    public $timestamps = false;
    protected $table ='actividad';
    protected $fillable =[
                          'id_actividad',
                          'fecha_aviso_previo',
                          'prorroga',
                          'estado_actividad',
                          'usuario_adiciono',
                          'fecha_adiciono',
                          'usuario_modifico',
                          'fecha_modifico',
                          'id_obligacion',
                          'id_usuario'
                          ];

}
