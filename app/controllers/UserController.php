<?php
namespace App\Controllers;
use App\Models\User;
use Slim\Views\Twig as View;

class UserController extends Controller {
  protected $view;

	public function __construct(View $view)
	{
		$this->view = $view;
	}
   public function pageUsuario($request, $response){
     	return $this->view->render($response, 'Usuario.twig');
   }



    public function Crearusuario($request, $response){
      $nombre = $request->getParsedBody()['txtName'];
      $passwoord = $request->getParsedBody()['txtpwd'];
      $mail = $request->getParsedBody()['txtmail'];


     if($nombre == NULL || $passwoord == NULL || $mail == NULL){
      return $this->view->render($response, 'Usuario.twig');
     }else{
       $create = User::create([
                         'id_usuario' => '19',
                         'nombre_usuario' => $nombre,
                         'password_usuario' => $passwoord,
                         'email' => $mail,
                         'id_tipo_usuario' => '1',
                         'id_perfil' => '1'
                   ])->first();;
      //  $this->getusuario($id);


       $message = "Usuario Creado";
       $code	 = "success";
       return $this->view->render($response, 'Usuario.twig', [
         'errors' => $message,
         'code' => $code
         ]);
     }
    }

/*RECIVE COMO PARAMETRO NOMBRE DEL USUARIO QUE SE QUIERE VISUALIZAR*/

    public function getusuario($request, $response){

        $nombre = $request->getParsedBody()['nombre'];
         $usuario = User::where('nombre_usuario', '=',$id)->get();
         return $response->withJson([
           'usuario'=> $usuario
         ]);
     }
}
