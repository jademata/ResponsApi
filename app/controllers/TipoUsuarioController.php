<?php
namespace App\Controllers;
use App\Models\TipoUsuario;

class TipoUsuarioController extends Controller {

    public function CrearTipoUsuario($request, $response){

      $id = $request->getParsedBody()['id'];
      $nombre = $request->getParsedBody()['nombre_usuario'];
      $estado = $request->getParsedBody()['estado_usuario '];

       $create = TipoUsuario::create([
           'id_tipo_usuario' => $id,
           'nombre_usuario' => $nombre,
           'estado_usuario' => $estado
       ]);
       var_dump($create);
    }

    public function getTipoUsuario($request, $response){
      $perfil = TipoUsuario::get();
      return $response->withJson([
        'perfil'=> $perfil
      ]);

       }
}
