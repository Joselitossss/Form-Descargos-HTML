<?php
    //Conectar con Servidor
    $conexion= mysqli_connect('192.168.0.227','form','123456');

    //Probando la conexion

    if(!$conexion){
        echo "No se pudo conectar con el servidor";
    }else{
        $base=mysql_select_db('form_descargo');
        if(!$base){
            echo "No se encontro la base de datos";
        }
    }

    //Recuperar las variables
    $Numero_Empleado=$_POST ['empl_num'];
    $Nombre_Empleado=$_POST ['user_name'];
    $Cargo=$_POST ['Cargo'];
    $Departamento=$_POST ['dept'];
    $Localidad=$_POST ['locate'];
    $Extension=$_POST ['ext'];
    $Imputacion=$_POST ['imputacion'];
    $No_Flota=$_POST ['flota'];

    //Hacer sentencia de SQL
    $sql="INSERT INTO Informacion_Empleado VALUES('$Numero_Empleado',
                                                  '$Nombre_Empleado',
                                                  '$Cargo',
                                                  '$Departamento',
                                                  '$Localidad',
                                                  '$Extension',
                                                  '$Imputacion',
                                                  '$No_Flota')";
    //Ejecucion de las sentencias
    $ejecutar = mysqli_query($sql);

    //Verificar la sentencia
    if(!$ejecutar){
        echo"Ha ocurrido un error";
    }
    else{
        echo"Datos guardados<br><a href='index.php'>Volver</a>";
    }
?>