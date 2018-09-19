<?php
namespace App\Controllers;
use App\Models\Glosario;

class GlosarioController extends Controller {

    public function CrearGlosario($request, $response){
      $id = $request->getParsedBody()['id'];
      $descripcion = $request->getParsedBody()['descripcion'];
      $fechalimite= $request->getParsedBody()['fecha_limite'];
      $link = $request->getParsedBody()['link'];
      $usuarioadicion= $request->getParsedBody()['usuario_adiciono'];
      $fechadicion = $request->getParsedBody()['fecha_adiciono'];

       $create = Glosario::create([
                                 'id_glosario' =>$id,
                                 'id_obligacion' =>'1',
                                 'id_punto_atencion' =>'1',
                                 'descripcion' =>$descripcion,
                                 'fecha_limite' => $fechalimite,
                                 'link' => $link,
                                 'usuario_adiciono' => $usuarioadicion,
                                 'fecha_adiciono' => $fechadicion,
                                 'usuario_modifico' =>'',
                                 'fecha_modific' =>''
                       ]);
       var_dump($create);
    }

    public function getGlosario($request, $response){
        $perfil = Glosario::get();
        return  json_encode($perfil);

       }
}
