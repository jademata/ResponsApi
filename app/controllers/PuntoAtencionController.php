<?php
namespace App\Controllers;
use App\Models\PuntoAtencion;

class PuntoAtencionController extends Controller {

  public function CrearPuntoAtencion($request, $response){

    $id = $request->getParsedBody()['id'];
    $institucion = $request->getParsedBody()['institucion'];
    $direccion = $request->getParsedBody()['direccion'];
    $telefono = $request->getParsedBody()['telefono'];
    $usuarioadiciono = $request->getParsedBody()['usuario_adiciono'];
    $fechadiciono = $request->getParsedBody()['fecha_adiciono'];

     $create = PuntoAtencion::create([
                               'id_punto_atencion' => $id,
                               'institucion' => $institucion,
                               'direccion' => $direccion,
                               'telefono' => $telefono,
                               'fecha_adiciono' => $fechadiciono,
                               'usuario_adiciono' => $usuarioadiciono,
                               'fecha_modi' => '',
                               'usuario_modifico' => '',
                               'fecha_modifico' => ''
                        ]);
     var_dump($create);
  }

  public function getPuntoAtencion($request, $response){
    $perfil = PuntoAtencion::get();
    return  json_encode($perfil);

     }

}
