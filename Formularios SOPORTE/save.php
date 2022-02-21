
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

if (empty($Numero_Empleado)){$Numero_Empleado= NULL;}
if (empty($Nombre_Empleado)){$Nombre_Empleado= NULL;}
if (empty($Cargo)){$Cargo= NULL;}
if (empty($Departamento)){$Departamento= NULL;}
if (empty($Localidad)){$Localidad= NULL;}
if (empty($Extension)){$Extension=NULL;}
if (empty($No_Flota)){$No_Flota=NULL;}

    //Tipo de solicitud

    //Tipo y modelo de equipo

    //Servicios de acceso


//Hacer sentencia de SQL para la tabla de Informacion_Empleado
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