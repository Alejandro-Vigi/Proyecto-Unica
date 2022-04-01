
<?php
    include "obtener_datosAlumno.php"; 
?>

<head>
    <link rel="stylesheet" href="styles.css">
</head>
<!-- se importa JQuery-->
<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous">
</script>
  
<div class="col-md-10"> 
    <!--<table id="tablaAlumnos" class="table table-sm table-striped">
    <table id="tablaAlumnos">
        <thead> 
            <tr>
                 <th width="5%">id</th> 
                 <th width="20%">Nombre</th> 
                 <th width="20%">Apellido</th>  
           </tr> 
       </thead> 
       <tbody></tbody> 
    </table> -->
    <?php
            echo '<table>';
            for ($i = 0; $i < count($datosAlumnos); $i++){
                    echo '<tr>';
                    echo "<td>{$datosAlumnos[$i]['nombre']}</td>";
                    echo '</tr>';
            }
            echo '</table>';
    ?>

</div>
