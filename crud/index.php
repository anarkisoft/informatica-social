<?php

//nos conectamos a la BD

require'class/database.php';
$objData = new Database();

$sth = $objData->prepare('SELECT * FROM datos2');

$sth->execute();

$result = $sth->fetchAll();

?>
<!DOCTYPE html>
<html lang="es">
    
    <head>
        <title>CRUD con PDO</title>
        <meta charset="utf-8" />

        <link rel="css/estilos.css"></script>
        <link rel="javascript/jquery-ui/jquery-ui.css"></script>
        <link rel="css/table.css"></script>
        <link rel="stylesheet" href="framework  /bootstrap/css/bootstrap.min.css">


 <!--<script src="javascript/jquery.js"></script> -->
 <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="javascript/jquery-ui/jquery-ui.js"></script>
<script src="javascript/datatable.js"></script>
<script src="javascript/sh.js"></script>

<script src="javascript/script.js"></script>



    </head>
    <body>

    <div id="example_filter" class="dataTables_filter">
    <label>
    Search:
    <input type="search" class="" placeholder="" aria-controls="example">
    </label></div>



        <table id='tablas' border="1" cellspacing="0"  class="table table-hover table-condensed dataTable display">
            <tr class='warning'>
                <td colspan="8"><a href="nuevo.php" class='btn btn-primary'>Nuevo Registro</a></td>
            </tr>
            <tr>
                <td>Nombres</td>
                <td>Apellido</td>
                <td>Cedula</td>
                <td>Correo</td>
                <td>Telefono</td>
                <td>Direccion</td>
                <td>Año de Graduacion</td>
                <td>Descripción</td>
                <td colspan="2">Acciones</td>
            </tr>
            <?php
            
            if($result){
                foreach ($result as $key => $value) {?>
             <tfoot>   
            <tr>
                <td><?php echo $value['nombre'];?></td>
                <td><?php echo $value['apellido'];?></td>
                <td><?php echo $value['cedula'];?></td>
                <td><?php echo $value['correo'];?></td>
                <td><?php echo $value['telefono'];?></td>
                <td><?php echo $value['direccion'];?></td>
                <td><?php echo $value['grado'];?></td>
                <td><?php echo $value['descri'];?></td>
                <td><a class='btn btn-warning' href="modificar.php?id=<?php echo $value['idDato'];?>">Modificar</a></td>
                <td><a class='btn btn-warning' href="eliminar.php?id=<?php echo $value['idDato'];?>">Eliminar</a></td>
            </tr>
            </tfoot>
            <?php
                
            }
            
                
            }else{?>
            <tr>
                <td colspan="4">No hay registros para mostrar</td>
            </tr><?php
                
            }
            ?>
            
        </table> 
   



  

        <script>    
        
            $(document).ready(function(){
    $('#tablas').DataTable( {
        "paging":   false,
        "ordering": false,
        "info":     false
    } );
});

        </script>
    </body>
    
</html>