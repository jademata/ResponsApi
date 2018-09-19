<?php
//RUTAS DE LA CREACION DE LOS CATALOGOS
$app->post('/actividad','ActividadController:CrearActividad');
$app->post('/glosario','GlosarioController:CrearGlosario');
$app->post('/obligacion','ObligacionController:CrearObligacion');
$app->post('/puntoatencion','PuntoAtencionController:CrearPuntoAtencion');
$app->post('/perfil','TipoPerfilController:Crearperfil');
$app->post('/tipousuario','TipoUsuarioController:CrearTipoUsuario');
$app->post('/usuario','UserController:Crearusuario');



//RUTAS DE LA CONSULTA DE LOS CATALOGOS
$app->get('/getactividad','ActividadController:getActividad');
$app->get('/getglosario','GlosarioController:getGlosario');
$app->get('/getobligacion','ObligacionController:getObligacion');
$app->get('/getpuntoatencion','PuntoAtencionController:getPuntoAtencion');
$app->get('/getperfil','TipoPerfilController:getperfil');
$app->get('/gettipousuario','TipoUsuarioController:getTipoUsuario');
$app->put('/getusuario','UserController:getusuario');




//RUTAS DEL DE LAS CLASES QUE VALIDAN EL LOGIN DEL USUARIO

$app->get('/crearusuario', 'UserController:pageUsuario');
$app->post('/crearusuario', 'UserController:Crearusuario');

/*
$app->group('/api',function(){
$this->post('/login', 'App\controllers\userController:login');
});*/

$app->get('/login', 'LoginController:index');
// check user and password
$app->post('/login', 'LoginController:checkUser');
