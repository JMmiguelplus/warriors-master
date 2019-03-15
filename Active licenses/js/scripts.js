
  $(document).ready(function(){//funcion para comprobar el codigo de la licencia
      $("#check").click(function(){
        var lic = document.getElementById('activar').value;
           $.ajax({
             type:"POST",
             url:"check.php",
             data:{licencia:lic},
             dataType: "JSON",
             beforeSend: function() {
               $("#check").val("Comprobando...");
               $("#imagen").show();
               $("#mensaje").html('Activando..');
             }
           })
           .done(function(respuesta){
             $('#imagen').hide();
             if(respuesta == 1){
               $('mensaje').html('hola');
             }
             else{
               $('#mensaje').html('Ingresa un Codigo');
             }
           }
         )
           .done(function (res) {
             if (res == 101) {
             } else if(res == 102) {
               alert('Error al ejecutar su consulta')
             } else if(res == 103) {
               alert('La licencia '+lic+' no concuerda con ninguna en el sistema. Por favor vuelva a ingresar su licencia correctamente.');
             } else {
               $('#check').val('Verificar');
               $('#insert').modal('hide');
               $('#table-one').val('show');
               $('#nomb').html(res.nom);
               $('#pro').html(res.proc);
               $('#feci').html(res.fci);
               $('#fecf').html(res.fcf);
               $('#lice').html(res.lic);
               $('#time').html(res.tim+" dias");
               setTimeout(function(){
                 $("#exampleModal").modal('show');
               },100);
           }
         });
       })
     })

