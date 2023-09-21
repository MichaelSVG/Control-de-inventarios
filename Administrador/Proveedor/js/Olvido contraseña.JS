function PromptDemom() {
    //Ingresamos una pregunta
    var REGISTRAR = prompt("¿Ingresa el usuario que acabas de registrar?", "");
    //Verificamos si el usuario ingreso un valor
    if (REGISTRAR == REGISTRAR ){
        alert("Usuario no es correcto");
    }
    //Verificamos si el usuario NO ingreso un valor
    else 
    alert("El usuario" + REGISTRAR + " se verifico, se verifico, acepta e inicia sesión" );
    
    
}
function Olvido_Password() {
    //Ingresamos una pregunta
    var Usuario = prompt("ingresa el correo del usuario registrado", "");
    var Usuario1 = prompt("Aceptas enviar correo", "");
    //Verificamos si el usuario ingreso un valor
    if (Usuario != Usuario1 ){
        alert("Correo enviado con exito");
    }
    //Verificamos si el usuario NO ingreso un valor
    else 
    alert("El correo no esta registrado o no comple los parametros acceptados" ); 
}
function Inicio_de_Sesion(){  
var win = navigator.platform.indexOf('Win') > -1;
if (win && document.querySelector('#sidenav-scrollbar')) {
  var options = {
    damping: '0.5'
  }
  Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
}
function myFunction() {
alert("Inicio Exitoso");
}
}