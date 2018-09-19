<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Glosario extends Model {
    public $timestamps = false;
    protected $table ='glosario';
    protected $fillable =[
                            'id_glosario',
                            'id_obligacion',
                            'id_punto_atencion',
                            'descripcion',
                            'fecha_limite',
                            'link',
                            'usuario_adiciono',
                            'fecha_adiciono',
                            'usuario_modifico',
                            'fecha_modifico'
                         ];
}
