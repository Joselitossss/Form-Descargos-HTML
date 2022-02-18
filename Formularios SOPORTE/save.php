
<?php   

include ("conexion.php");

//Recuperar las variables

    //Informacion del usuario
$Numero_Empleado=$_POST ['Numero_Empleado'];
$Nombre_Empleado=$_POST ['Nombre_Empleado'];
$Cargo=$_POST ['Cargo'];
$Departamento=$_POST ['Departamento'];
$Localidad=$_POST ['Localidad'];
$Extension=$_POST ['Extension'];
$No_Flota=$_POST ['No_Flota'];

if (empty($Numero_Empleado)){$Numero_Empleado="0";}
if (empty($Nombre_Empleado)){$Nombre_Empleado="0";}
if (empty($Cargo)){$Cargo="0";}
if (empty($Departamento)){$Departamento="0";}
if (empty($Localidad)){$Localidad="0";}
if (empty($Extension)){$Extension="0";}
if (empty($No_Flota)){$No_Flota="0";}

    //Tipo de solicitud

    //Tipo y modelo de equipo

    //Servicios de acceso


//Hacer sentencia de SQL
$sql="INSERT INTO Informacion_Empleado VALUES('$Numero_Empleado',
                                              '$Nombre_Empleado',
                                              '$Cargo',
                                              '$Departamento',
                                              '$Localidad',
                                              '$Extension',
                                              '$No_Flota')";
//Ejecucion de las sentencias
$ejecutar = mysqli_query($conn,$sql);

//Verificar la sentencia
if(!$ejecutar){
    echo"Ha ocurrido un error";
}
else{
    echo"Datos guardados<br><a href='index.php'>Volver</a>";
}


?>