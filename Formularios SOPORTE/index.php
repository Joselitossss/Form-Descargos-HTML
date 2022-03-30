<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado_de_busqueda</title>
    <link rel="stylesheet" href="css/Listado_busqueda.css">
</head>
    <body>
    <?php
            include ("includes/conexion.php");
            $sql="SELECT I.id, Numero_Empleado, Nombre_Empleado, Cargo, Departamento, Localidad, Extension, No_Flota, asignacion, equipo, otro_equipo, lptserial, imei, model, impmodel, acceso, AccesMovil, Nivel_servicio_de_datos, fecha_form, Justificacion, FechaEntrega FROM Informacion_Empleado AS I, Descripcion_Solicitud AS D WHERE I.id = D.id ORDER by id ASC";
            $rta=mysqli_query($conn,$sql);
        ?>
        <form action="Pages/busqueda.php" class="form-listado" method="post"  enctype="multipart/form-data">
            <h1 class="Form-title">Busqueda de Formulario</h1>
            <div class="container_flex">
                <div id="search-div">
                    <input type="text" id="form-search-inp" placeholder="Escriba aquí..." name="buscar">
                    <input type="submit" id="form-search-btn" value="Buscar">
                </div>
                <div><input type="button" class="form-submit" onclick="location.href='Pages/nuevo.php'" value="Nuevo"></div>
                
            </div>
            <table class="list-table">
                <thead>
                    <tr>
                        <th class="esquinaIZQ">ID</th>
                        <th>Numero de Empleado</th>
                        <th>Nombre</th>
                        <th>Localidad</th>
                        <th>Equipo Asignado</th>
                        <th>Imei/Serial</th>
                        <th>Modelo</th>
                        <th>Tipo de solicitud</th>
                        <th>Fecha de Entrega</th>
                        <th class="esquinaDER">Accion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($mostrar = mysqli_fetch_row($rta)){
                    ?>
                    <tr>
                        <td><?php echo $mostrar ['0'] ?></td>
                        <td><?php echo $mostrar ['1'] ?></td>
                        <td><?php echo $mostrar ['2'] ?></td>
                        <td><?php echo $mostrar ['5'] ?></td>
                        <td><?php 
                        if($mostrar['9']=='Celular'){echo $mostrar ['9'];}
                        if($mostrar['9']=='Laptop'){echo $mostrar ['9'];}
                        if($mostrar['9']=='Otro Equipo'){echo $mostrar ['10'];}
                        if($mostrar['9']=='Impresora'){echo $mostrar ['9'];}
                        ?></td>
                        <td><?php
                        if($mostrar['9']=='Celular'){echo $mostrar ['12'];}else{echo $mostrar ['11'];}
                        ?></td>
                        <td><?php if($mostrar['13']=='NULL'){echo $mostrar ['14'];}else{echo $mostrar['13'];} ?></td>
                        <td><?php echo $mostrar ['8'] ?></td>
                        <td><?php echo $mostrar ['18'] ?></td>
                        <td><a href="Pages/editar.php?id=<?php echo $mostrar ['0']; ?>">Editar</a></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            
            
        </form>
    </body>
</html>