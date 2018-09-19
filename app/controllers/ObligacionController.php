<?php
namespace App\Controllers;
use App\Models\Obligacion;

class ObligacionController extends Controller {

    public function CrearObligacion($request, $response){

        $id = $request->getParsedBody()['id'];
        $nombre = $request->getParsedBody()['nombre_obligacion'];
        $estado = $request->getParsedBody()['estado'];
        $usuarioadiciono = $request->getParsedBody()['usuario_adiciono'];
        $fechadiciono = $request->getParsedBody()['fecha_adiciono'];

       $create = Obligacion::create([
                                   'id_obligacion' => $id,
                                   'nombre_obligacion' => $nombre,
                                   'estado_obligacion' => $estado,
                                   'usuario_adiciono' => $usuarioadiciono,
                                   'fecha_adiciono' => $fechadiciono,
                                   'usuario_modifico' => '',
                                   'fecha_modifico' => ''
               ]);
       var_dump($create);
    }

    public function getObligacion($request, $response){
      $perfil = Obligacion::get();
      return  json_encode($perfil);

       }
}
