$(document).ready(function(){
    $('#Consulc').change(function() {
      var cli = document.getElementById('Consulc').value;
      console.log(cli);
      if (cli >= 1) {
        $('#licencia').attr('readonly',true);
        $('#licencia').val('');
      }else {
        $('#licencia').attr('readonly',false);
      }
      //console.log(asd);
    });

  });
