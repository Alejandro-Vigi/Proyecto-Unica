<head>
    <link rel="stylesheet" href="styles.css">
</head>
<!-- se importa JQuery-->
<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous">
</script>
  
<script type="text/javascript">
  $(document).ready(function(){ 
      //con ajax, nos traemos los datos de la base de datos
      $.ajax({ 
          url: 'obtener_datos.php', 
          type: 'get', dataType: 'JSON', 
          success: function(response){ 
              var len = response.length; 
              for(var i=0; i<len; i++){ 
                  var idA = response[i].id; 
                  var name = response[i].nombre; 
                  var paterno = response[i].apellido;  
                  var tr_str = "<tr>" + "<td>" + idA + "</td>" + "<td>" + name + "</td>" + "<td>" + paterno + "</td></tr>"; 
                  $("#tablaAlumnos tbody").append(tr_str); 
              } 
          } 
      }); 
  }); 

</script>



<div class="col-md-10"> 
    <!--<table id="tablaAlumnos" class="table table-sm table-striped">-->
    <table id="tablaAlumnos">
        <thead> 
            <tr>
                 <th width="5%">id</th> 
                 <th width="20%">Nombre</th> 
                 <th width="20%">Apellido</th>  
           </tr> 
       </thead> 
       <tbody></tbody> 
    </table> 
</div>
