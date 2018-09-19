<?php
namespace App\Controllers;
use App\Models\Actividad;

class ActividadController extends Controller {

    public function CrearActividad($request, $response){

      $id = $request->getParsedBody()['id'];
      $fechaaviso = $request->getParsedBody()['fecha_aviso'];
      $prorroga = $request->getParsedBody()['prorroga'];
      $estado = $request->getParsedBody()['estado_actividad'];
      $usuarioadicion = $request->getParsedBody()['usuario_adiciono'];
      $fechadicion = $request->getParsedBody()['fecha_adiciono'];


           $create = Actividad::create([
             'id_actividad' =>  $id,
             'fecha_aviso_previo' => $fechaaviso,
             'prorroga' => $prorroga,
             'estado_actividad' => $estado,
             'usuario_adiciono' => $usuarioadicion,
             'fecha_adiciono' => $fechadicion,
             'id_obligacion' => '1',
             'id_usuario' => '1'
           ]);
           var_dump($create);
        }

        public function getActividad($request, $response){
          $perfil = Actividad::get();
          return  json_encode($perfil);

           }
}
