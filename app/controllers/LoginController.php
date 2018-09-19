<?php
namespace App\Controllers;
use App\Models\User;
use Slim\Views\Twig as View;
use \Firebase\JWT\JWT;

class LoginController extends Controller {
	protected $view;

	public function __construct(View $view)
	{
		$this->view = $view;
	}

	public function index($request, $response)
	{
		// To insert the record in the table
		/*User::create([
			'name' => 'hamr',
			'password' => md5('hamr1234!'),
		]);*/
		return $this->view->render($response, 'login.twig');
	}

/*verifica las credenciales de los usuarios tipo administradores los cuales
  se encargan del mantenimiento del webservice
	*/


		private $key = "secretkey";

	public function checkUser($request, $response){

		$username = $request->getParsedBody()['txtName'];
		$userpwd = $request->getParsedBody()['txtPwd'];
		$user	  	= User::where('password_usuario', '=', $userpwd)
						    	->where('nombre_usuario', '=', $username)->first();


		 if(empty($user)){
				return $response->withJson([
				'success' => false,
				'message' => "Username or Password false"
				]);
		 }

	 $token = [
		"iss" => "utopian",
		"iat" => time(),
		"exp" => time() + 60,
		"data" => ["id" => $user->id_usuario]];
		$jwt = JWT::encode($token, $this->key);
		return $response->withJson([
		'success' => true,
		'message' => "Login Successfull",
		'jwt' => $jwt
		]);

		}
}
