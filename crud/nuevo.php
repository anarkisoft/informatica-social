<!DOCTYPE html>
<html lang="es">
    
    
    <head>
        <title>CRUD con PDO</title>
        <meta charset="utf-8" />
         <link rel="stylesheet" href="framework  /bootstrap/css/bootstrap.min.css">
    </head>
    <body>
    <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <form name="crud" method="post" action="nuevo_exe.php">
        <fieldset>
         <legend>Nuevo Registro de egresado</legend>
         <div class="form-group">
            <label>Nombre:</label><br>
            <input class="form-control" type="text" name="nombre" /><br>

            <label>Apellido:</label><br>
            <input class="form-control" type="text" name="apellido" /><br>

            <label>Cedula:</label><br>
            <input class="form-control" type="text" name="cedula" /><br>

             <label>Email :</label><br>
            <input class="form-control" type="email" name="correo" /><br>


            <label>Telefono:</label><br>
            <input  class="form-control" type="text" name="telefono" /><br>

            <label>Direccion:</label><br>
            <input class="form-control" type="text" name="direccion" /><br>

             <label>Año de Graduacion :</label><br>
            <input class="form-control" type="date" name="graduacion" /><br>

                
            <label>Proyeccion:</label><br>
            <textarea class="form-control" name="descri" rows="10"></textarea><br>
     
            <input type="submit" class="btn btn-primary" value="REGISTRAR" />
                   </div>
        </fieldset>
        </form> 
</div>
        </div>
        <div class="col-md-4"></div>
         <script href='javascript/scripts.js'></script> 
        <script href='javascript/jquery.js'></script>
        <script href='framework/bootstrap/js/bootstrap.min.js'></script>   
    </body>
    
</html>