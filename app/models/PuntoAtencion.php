<?php
namespace App\Models;
 use Illuminate\Database\Eloquent\Model;

 class PuntoAtencion extends Model{
      public $timestamps = false;
      protected $table = 'puntodeatencion';
      protected $fillable  = [
                              'id_punto_atencion',
                              'institucion',
                              'direccion',
                              'telefono',
                              'fecha_adiciono',
                              'usuario_adiciono',
                              'fecha_modi',
                              'usuario_modifico',
                              'fecha_modifico'
                            ];

 }
