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
            $sql="SELECT I.id, Numero_Empleado, Nombre_Empleado, Localidad, celular, lpt, otros, otro_equipo, imei, model, asignacion FROM Informacion_Empleado AS I, Descripcion_Solicitud AS D WHERE I.id = D.id ORDER by id ASC";
            $rta=mysqli_query($conn,$sql);
        ?>
        <form action="" class="form-listado" method="post" enctype="multipart/form-data">
            <h1 class="Form-title">Busqueda de Formulario</h1>
            <div class="container_flex">
                <input type="search" class="form-search" placeholder="Busqueda">
            </div>
            <table class="list-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Numero de Empleado</th>
                        <th>Nombre</th>
                        <th>Localidad</th>
                        <th>Equipo Asignado</th>
                        <th>Imei/Serial</th>
                        <th>Modelo</th>
                        <th>Tipo de solicitud</th>
                        <th>Accion</th>
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
                        <td><?php echo $mostrar ['3'] ?></td>
                        <td><?php   
                        if($mostrar['4']!='0'){echo "Celular<br>";}else{echo "";}
                        if($mostrar['5']!='0'){echo "Laptop<br>";}else{echo "";}
                        if($mostrar['6']!='0'){echo $mostrar['7'];}else{echo "";} 
                        ?></td>
                        <td><?php echo $mostrar ['8'] ?></td>
                        <td><?php echo $mostrar ['9'] ?></td>
                        <td><?php echo $mostrar ['10'] ?></td>
                        <td><a href="editar.php">Editar</a></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            
            <input type="button" class="form-submit" onclick="location.href='nuevo.php'" value="Nuevo">
        </form>
    </body>
</html>