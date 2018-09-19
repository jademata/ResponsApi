$(document).ready(function(){

    $('#btnCrear').click(function(){
      var errores = '';

   //VALIDAR NOMBRE USUARIO ================================>>>>>>
    if($('#txtName').val()== ''){
       errores +='	<p>Ingrese un Nombre de Usuario</p>';
    }
  //VALIDAR CORREO ELECTRONICO ================================>>>>>>
    if($('#txtmail').val()== ''){
       errores +='<p>Ingrese un Correo Electronico</p>';
    }
  //VALIDAR $passwoord ================================>>>>>>
    if($('#txtpwd').val()== ''){
       errores +='	<p>Ingrese una Contraseña</p>';
    }
  $('#btnCrear').click(function(){
     if(errores == '' == false){
         var mensaje_Modal = ' <div class="modal_wrap">'+
                                  '<div class="mensaje_modal">'+
                                     '<h3>Errores encontrados</h3>'+
                                    errores+
                                    '	<span id="btnclose">Cerrar</span>'+
                                  '<div>'+
                               '<div>'
       $('body').append(mensaje_Modal);
     }
     //CERRAR MODAL================================>>>>>>
     $('#btnclose').click(function(){
       $('.modal_wrap').remove();
     });

    });
});
