<?php
namespace App\Controllers;
use App\Models\TipoPerfil;
use Slim\Http\Request;
use Slim\Http\Response;
class TipoPerfilController extends Controller {

    public function Crearperfil( $request,  $response, $args){
     $idperfil = $request->getParsedBody()['id'];
     $tipo = $request->getParsedBody()['tipoperfil'];
     $nombre = $request->getParsedBody()['nombreperfil'];

       $create = TipoPerfil::create([
           'id_perfil' => $idperfil,
           'tipo_perfil' => $tipo,
           'nombre_perfil' => $nombre
       ]);
       var_dump($create);

       return json_encode($create);

    }


        public function getperfil($request, $response){
          $perfil = TipoPerfil::get();
          return  json_encode($perfil);

           }
}
