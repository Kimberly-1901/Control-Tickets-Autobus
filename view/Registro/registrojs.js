function validarNombre(){

    let x = document.getElementById("nombre").value;

    let patron = /^[a-zA-Z ]+$/;

    if(x.search(patron)){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Digite un nombre valido',
            showConfirmButton: false,
            timer: 1500
          })

          document.getElementById("nombre").value="";
          return false;
    }else{

        return true;
    }
    
}
function validarNacio(){

    let x = document.getElementById("nacionalidad").value;

    let patron = /^[a-zA-Z ]+$/;

    if(x.search(patron)){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Digite una nacionalidad valida',
            showConfirmButton: false,
            timer: 1500
          })

          document.getElementById("nacionalidad").value="";
          return false;
    }else{

        return true;
    }
    
}

function validarApellido(){

    let x = document.getElementById("apellidos").value;

    let patron = /^[a-zA-Z ]+$/;

    if(x.search(patron)){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Digite un apellido valido',
            showConfirmButton: false,
            timer: 1500
          })

          document.getElementById("apellidos").value="";
          return false;
          x.val("");
    }else{

        return true;
    }
    
}

function validarTarjeta(){
    var ced = document.getElementById("tarjeta").value;
  
    if (ced.length != 16  || ced.length == 0 || isNaN(ced)   ) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Digite un numero de tarjeta valido',
            showConfirmButton: false,
            timer: 1500
          })

            document.getElementById("tarjeta").value="";
            return false;
          
    }else{

        return true;
  }
}
function validarCCV(){
    var ced = document.getElementById("ccv").value;
  
    if (ced.length != 3 || ced.length == 0 || isNaN(ced)   ) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Digite un CCV valido',
            showConfirmButton: false,
            timer: 1500
          })

            document.getElementById("ccv").value="";
            return false;
          
    }else{

        return true;
  }
}

function validarPasaporte() {

    var ced = document.getElementById("pasaporte").value;
  
    if (ced.length != 9 || ced.length == 0 || isNaN(ced)) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Digite un pasaporte valido',
            showConfirmButton: false,
            timer: 1500
          })

            document.getElementById("pasaporte").value="";
            return false;
          
    }else{

        return true;
  }
}

function validarEdad() {

    var edad = document.getElementById("edad").value;
  
    if (edad.length == 0 || isNaN(edad)) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Digite una edad valida',
            showConfirmButton: false,
            timer: 1500
          })

          document.getElementById("edad").value="";
          return false;
    }else{

        return true;
  }
}
function validarTelefono() {

    var tel = document.getElementById("tel").value;
  
    if (tel.length == 0 || isNaN(tel)) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Digite un telefono valido',
            showConfirmButton: false,
            timer: 1500
          })
  
          document.getElementById("tel").value="";
          return false;
    }else{
  
        return true;
    }
  }
  
function validarEmail() {

    var correo = document.getElementById("correo").value;
    if (validarCorreo(correo) == false) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Digite un correo valido',
            showConfirmButton: false,
            timer: 1500
          })
          document.getElementById("correo").value="";
      return false;
    } else {
      return true;
    }
  
  
}

function validarCorreo(correo) {

    if (/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}.){1,125}[A-Z]{2,63}$/i.test(correo)) {
      return true;
    } else {
      return false;
    }
  }

function validarFecha(){
    
    let date = new Date();
    console.log(date);
    let anno1 = date.getFullYear();
    let mes1 = date.getMonth();

    let date2 =  document.getElementById("vencimiento").value;

    let fecha = new Date(date2);
    let anno2 = fecha.getFullYear();
    let mes2 = fecha.getMonth();


        
    if(anno2 < anno1 || mes2 < mes1){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Digite una fecha valida',
            showConfirmButton: false,
            timer: 1500
          })
          return false;
    }

    return true;
}

function validarPassword(){
  var ced = document.getElementById("password").value;
  
    if (ced.length != 8 || ced.length == 0 ) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Digite una contraseña valida(8 digitos)',
            showConfirmButton: false,
            timer: 1500
          })

            document.getElementById("password").value="";
            return false;
          
    }else{

        return true;
  }
}

function validarCompleto(){
  
  if(validarNombre() && validarPasaporte() && validarTarjeta() && validarApellido() && validarFecha() && validarTelefono()){
    console.log("hola desde validar");
    let timerInterval
    Swal.fire({
      title: 'Verificando Datos',
      html: ' <b></b> ',
      timer: 2000,
      timerProgressBar: true,
      didOpen: () => {
        Swal.showLoading()
        timerInterval = setInterval(() => {
          const content = Swal.getHtmlContainer()
          if (content) {
            const b = content.querySelector('b')
            if (b) {
              b.textContent = Swal.getTimerLeft()
            }
          }
        }, 100)
      },
      willClose: () => {
        clearInterval(timerInterval)
      }
    }).then((result) => {
      if (result.dismiss === Swal.DismissReason.timer) {
        console.log('I was closed by the timer')
      }
    })
    setTimeout(success,1500);
      
    }
  else{

  }
}

function success(){
  document.formulario.submit();
}