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
               var dia = new Date();
               var dia2 = res.fcf;
               var hoy = (dia.getMonth() + 1 ) + '-' + dia.getDate() + '-' + dia.getFullYear();
               var hoy2 = dia2.slice(6, 10) + "-" + dia2.slice(3, 5) + "-" + dia2.slice(0, 2);
               var tim = moment(hoy2).diff(hoy, 'days');
               // console.log(tim+hoy2);
               if( tim <= 365  && tim >= 0 || tim <= 30  && tim >= 0 || tim <= 730  && tim >= 0 || tim <= 40  && tim >= 0 || tim <= 90  && tim >= 0 || tim <= 1095  && tim >= 0 ){
                 if('Demo' == res.lic){
                   $('#sp').addClass('bg-success');
                   $('#Cp').addClass('bg-success');
                   $('#Ac').addClass('bg-warning');
                   $('#Mn').addClass('bg-warning');
                   $('#Ga').addClass('bg-warning');
                 }
                 if('Licencia_Standar' == res.lic) {
                   $('#Ac').addClass('bg-success');
                   $('#sp').addClass('bg-success');
                   $('#Mn').addClass('bg-success');
                   $('#Ga').addClass('bg-success');
                   $('#Cp').addClass('bg-warning');
                 }
                 if('Licencia_Full' == res.lic){
                   $('#sp').addClass('bg-success');
                   $('#Ac').addClass('bg-success');
                   $('#Mn').addClass('bg-success');
                   $('#Ga').addClass('bg-success');
                   $('#Cp').addClass('bg-warning');
                 }
                 if('Licencia_Premium' == res.lic){
                    $('#sp').addClass('bg-success');
                    $('#Ac').addClass('bg-success');
                    $('#Mn').addClass('bg-success');
                    $('#Ga').addClass('bg-success');
                    $('#Cp').addClass('bg-success');
                 }
               }else{
                 if('Demo' == res.lic){
                   $('#sp').addClass('bg-danger');
                   $('#Cp').addClass('bg-danger');
                   $('#Ac').addClass('bg-warning');
                   $('#Mn').addClass('bg-warning');
                   $('#Ga').addClass('bg-warning');
                 }
                 if('Licencia_Standar' == res.lic) {
                   $('#Ac').addClass('bg-danger');
                   $('#sp').addClass('bg-danger');
                   $('#Mn').addClass('bg-danger');
                   $('#Ga').addClass('bg-danger');
                   $('#Cp').addClass('bg-warning');
                 }
                 if('Licencia_Full' == res.lic){
                   $('#sp').addClass('bg-danger');
                   $('#Ac').addClass('bg-danger');
                   $('#Mn').addClass('bg-danger');
                   $('#Ga').addClass('bg-danger');
                   $('#Cp').addClass('bg-warning');
                 }
                 if('Licencia_Premium' == res.lic){
                    $('#sp').addClass('bg-danger');
                    $('#Ac').addClass('bg-danger');
                    $('#Mn').addClass('bg-danger');
                    $('#Ga').addClass('bg-danger');
                    $('#Cp').addClass('bg-danger');
                 }
               }
               setTimeout(function(){
                 $("#exampleModal").modal('show');
               },100);
           }
         });
       })
     })
