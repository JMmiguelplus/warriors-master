$(document).ready(function(){//funcion para comprobar el codigo de la licencia
  $("#check").click(function(){
    var lic = document.getElementById('licencia').value;
    var cl =  document.getElementById ('Consulc').value;
    if(cl == 0){
      $.ajax({
        type:"POST",
        url:"check.php",
        data:{licencia:lic},
        dataType: "JSON",
        beforeSend: function() {
          $("#check").val("Comprobando...");
        }
      })
      .done(function (res) {
        if (res == 101) {
          alert('Coloque el codigo de la Licencia o seleccione un nombre');
        } else if(res == 102) {
          alert('Error al ejecutar su consulta')
        } else if(res == 103) {
          alert('La licencia '+lic+' no concuerda con ninguna en el sistema. Por favor vuelva a ingresar su licencia correctamente.');
        } else {
          $('#check').val('Verificar');
          $('#Estatus').modal('hide');
          $('#checkModal').modal('show');
          $('#nomb').html(res.nom);
          $('#rfcc').html(res.rfc);
          $('#emai').html(res.mai);
          $('#pro').html(res.proc);
          $('#regi').html(res.resg);
          $('#feci').html(res.fci);
          $('#fecf').html(res.fcf);
          $('#lice').html(res.lic);
          $('#time').html(res.tim+" dias");
          $('#com').html(res.men);
          $('#codi').html(res.cod);
          var f = new Date();
          var ff = new Date(res.fcf);
          if(f <= ff){
            $('#Stats').addClass("bg-success");
            $('#Stats').html("Activo");
          }else{
            $('#Stats').addClass("bg-danger");
            $('#Stats').html("Inactivo");
          }
        }
      })
      .fail(function () {
        console.log("error");
      });
    } else {
      $('#licencia').attr('readonly',false);
      $('#Estatus').modal("hide");
      $('#checkModal1').modal("show");////////////Consulta de todoa las licencias del cliente
      $.ajax({
        type:"POST",
        url:"check1.php",
        data:{Consulc:cl},
        dataType: "JSON",
        beforeSend: function() {
          $("#check1").val("Comprobando...");
        }
      })
      .done(function (res2) {
        $("#name").html(res2[0][1]);
        $("#RFC").html(res2[0][2]);
        $("#correo").html(res2[0][3]);
        var ted = document.getElementById('lislicencia');
        var ted1 = document.getElementById('lispro');
        ted.innerHTML = '';
        ted1.innerHTML = '';
          $.each(res2,function (i, item){
          $("#lislicencia").append(item[8]+"<br>");
        });
        $.each(res2,function (i, item){
          $("#lispro").append(item[4]+"<br>");
        });
      })
      .fail(function( jqXHR, textStatus, errorThrown ) {
        if (jqXHR.status === 0) {
          alert('Not connect: Verify Network.');
        } else if (jqXHR.status == 404) {
          alert('Requested page not found [404]');
        } else if (jqXHR.status == 500) {
          alert('Internal Server Error [500].');
        } else if (textStatus === 'parsererror') {
          alert('Requested JSON parse failed.');
          console.log(textStatus+" "+errorThrown);
        } else if (textStatus === 'timeout') {
          alert('Time out error.');
        } else if (textStatus === 'abort') {
          alert('Ajax request aborted.');
        } else {
          alert('Uncaught Error: ' + jqXHR.responseText);
        }
      });
    }
  });

$('#Ocultar').click(function () {
  $('#checkModal1').modal('hide');
  document.getElementById ('Consulc').value = 0;
  document.getElementById("licencia").disabled = false;
});

var result = document.getElementById('lislicencia');
result.innerHTML = '';

});

function Sletras(e){
  key = e.keyCode || e.which;
  teclado= String.fromCharCode(key).toLowerCase();
  letras=" abcdefghijklmnopqrstuvwxyz";
  especiales="8-37-38-46-164";
  teclado_especial=false;
  for(var i in especiales){
    if(key==especiales[i]){
      teclado_especial=true;break;
    }
  }
  if(letras.indexOf(teclado)==-1 && !teclado_especial){
    return false;
  }
}
function Srfc(e){
  key = e.keyCode || e.which;
  teclado= String.fromCharCode(key).toLowerCase();
  letras=" abcdefghijklmnopqrstuvwxyz1234567890";
  especiales="8-37-38-46-164";
  teclado_especial=false;
  for(var i in especiales){
    if(key==especiales[i]){
      teclado_especial=true;break;
    }
  }
  if(letras.indexOf(teclado)==-1 && !teclado_especial){
    return false;
  }
}
function SletrasNum(e){
  key = e.keyCode || e.which;
  teclado= String.fromCharCode(key).toLowerCase();
  letras=" abcdefghijklmnopqrstuvwxyz1234567890-*/.";
  especiales="8-37-38-46-164";
  teclado_especial=false;
  for(var i in especiales){
    if(key==especiales[i]){
      teclado_especial=true;break;
    }
  }
  if(letras.indexOf(teclado)==-1 && !teclado_especial){
    return false;
  }
}

var namePattern = "^[a-z A-Z]{4,30}$";
var rfcPattern = "[A-Za-z]{4,8}";
var emailPattern = "^[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,4}$";
function checkInput(idInput, pattern) {
  return $(idInput).val().match(pattern) ? true : false;
}
function checkForm (idForm) {
  $(idForm + " *").on("keydown", function() {
    if (checkInput("#nombre", namePattern) && checkInput("#rfc", rfcPattern) && checkInput("#email", emailPattern)){
    } else {
    }
  });
}

$(function() {
  checkForm("#contactForm");
});


$(document).ready(function () {
  $("#nombre").keyup(checarUsuarios);
});
$(document).ready(function () {
  $("#nombre").change(checarUsuarios);
});
$(document).ready(function () {
  $("#rfc").keyup(checarrfc);
});
$(document).ready(function () {
  $("#rfc").change(checarrfc);
});
$(document).ready(function () {
  $("#email").keyup(checarEmails);
});
$(document).ready(function () {
  $("#email").change(checarEmails);
});

function checarUsuarios() {
  var nombre= document.getElementById('nombre').value;
  var namelenght = nombre.length;
  if (namelenght < 4)
  {
    document.getElementById("checkusername").innerHTML="<i class='fa fa-close'></i>  <input id='usernamechecker' type='hidden' value='0' name='usernamechecker'> ";
  } else {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (xhttp.readyState == 4 && xhttp.status == 200) {
        document.getElementById("checkusername").innerHTML = xhttp.responseText;
        usernameresponsed = document.getElementById('nombre').value;
        if (usernameresponsed=="1"){
          if (emailresponsed){
            emailresponsed=document.getElementById('emailchecker').value;
            if (emailresponsed=="1"){
              document.getElementById("contratar").disabled = false;
            }
          }
        } else if (usernameresponsed=="0"){
          document.getElementById("contratar").disabled = true;
        }
      }
    };
    xhttp.open("POST", "checarusername.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("nombre="+nombre+"");
  }
}
function checarEmails() {
  var email= document.getElementById('email').value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("checkemailresponse").innerHTML = xhttp.responseText;
      emailresponsed = document.getElementById('email').value;
      if (emailresponsed=="1"){
        if (usernameresponsed){
          usernameresponsed=document.getElementById('usernamechecker').value;
          if (usernameresponsed=="1"){
            document.getElementById("contratar").disabled = false;
          }
        }
      } else if(emailresponsed=="0"){
        document.getElementById("contratar").disabled = true;
      }
    }
  };
  xhttp.open("POST", "checkemail.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("email="+email+"");
}
function checarrfc() {
  var rfc= document.getElementById('rfc').value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("checkrfc").innerHTML = xhttp.responseText;
      rfcresponsed = document.getElementById('rfc').value;
      if (rfcresponsed=="1"){
        if (usernameresponsed){
          usernameresponsed=document.getElementById('usernamechecker').value;
          if (usernameresponsed=="1"){
            document.getElementById("contratar").disabled = false;
          }
        }
      } else if(rfcresponsed=="0"){
        document.getElementById("contratar").disabled = true;
      }
    }
  };
  xhttp.open("POST", "checarrfc.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("rfc="+rfc+"");
}

function listaclientes() {
  $.ajax({
    url: 'listado.php',
    dataType:'JSON'
  })
  .done(function(respuesta) {
    $.each(respuesta,function(i, item) {
      $('#listac').append($('<option>',{
        value:item['id_datos'],
        text :item['nombre']
      }));
      $('#Consulc').append($('<option>',{
        value:item['id_datos'],
        text :item['nombre']
      }));
    });
  })
  .fail(function () {
    alert('Error');
  });
}

$(document).ready(function(){//seleccion de select a ocultar
  $('#div1').hide();
  $('#div2').hide();
  $('#msj').hide();
  listaclientes();
  $('#listac').change(function() {
    var asd = document.getElementById('listac').value;
    if (asd >= 1) {
      $('#nombre').attr('readonly',true);
      $('#rfc').attr('readonly',true);
      $('#email').attr('readonly',true);
      $('#msj').show();
    } else {
      $('#nombre').attr('readonly',false);
      $('#rfc').attr('readonly',false);
      $('#email').attr('readonly',false);
      $('#msj').hide();
    }
  });
});

function getNewVal(sel) {  //funcion para ocultar los selects
  if (sel.value=="Demo"){
    divC = document.getElementById("div2");
    divC.style.display = "none";
    divT = document.getElementById("div1");
    divT.style.display = "";
  } else {
    divC = document.getElementById("div2");
    divC.style.display = "";

    divT = document.getElementById("div1");0
    divT.style.display = "none";
  }
}

$(document).ready(function(){
  $("#Estatus").on('hidden.bs.modal', function(){
  // alert('El modal se ha cerrado');
    document.getElementById('licencia').value = '';
  });
});
