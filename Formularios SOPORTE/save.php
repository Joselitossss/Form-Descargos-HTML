
<?php   

include ("includes/conexion.php");

if(isset($_REQUEST['Enviar'])){

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
    
        //Descripcion de solicitud
    
        $asignacion=$_POST ['asignacion'];
        $celular= (bool) $_POST ['celular'];
        $lpt= (bool) $_POST ['lpt'];
        $otros= (bool) $_POST ['otros'];
        $otro_equipo = $_POST['otro_equipo'];
        $imei=$_POST ['imei'];
        $model=$_POST ['model'];
        $acceso=$_POST ['acceso'];
        $AccesMovil=$_POST ['AccesMovil'];
        $Nivel_servicio_de_datos=$_POST ['Nivel_servicio_de_datos'];
        $fecha_form=$_POST ['fecha_form'];
        $Justificacion=$_POST ['Justificacion'];
        $FechaEntrega=$_POST ['FechaEntrega'];
        
        if ($celular!=1){$celular=0;}
        if ($lpt!=1){$lpt=0;}
        if ($otros!=1){$otros=0;}
        
        //Tipo y modelo de equipo
    
        //Servicios de acceso
    
        //Asignacion de minutos de celular
    
    //Hacer sentencia de SQL para la tabla de Informacion_Empleado
        $sql="INSERT INTO form_descargo.Informacion_Empleado (Numero_Empleado, Nombre_Empleado, Cargo, Departamento, Localidad, Extension, No_Flota) VALUES('$Numero_Empleado',
                                                    '$Nombre_Empleado',
                                                    '$Cargo',
                                                    '$Departamento',
                                                    '$Localidad',
                                                    '$Extension',
                                                    '$No_Flota')";
    
    //Hacer sentencia de SQL para la tabla de Descripcion_Solicitud
        if($celular==1){
        $sql_desc_sol="INSERT INTO form_descargo.Descripcion_Solicitud (asignacion, celular, lpt, otros, otro_equipo, imei, model, acceso, AccesMovil, Nivel_servicio_de_datos, fecha_form, Justificacion, FechaEntrega) VALUES ('$asignacion',
                                                    '$celular',
                                                    '$lpt',
                                                    '$otros',
                                                    '$otro_equipo',
                                                    '$imei',
                                                    '$model',
                                                    '$acceso',
                                                    '$AccesMovil',
                                                    '$Nivel_servicio_de_datos',
                                                    '$fecha_form',
                                                    '$Justificacion',
                                                    '$FechaEntrega')";
        }else{
        $sql_desc_sol="INSERT INTO form_descargo.Descripcion_Solicitud (asignacion, celular, lpt, otros, otro_equipo, imei, model, acceso, AccesMovil, Nivel_servicio_de_datos, fecha_form, Justificacion, FechaEntrega) VALUES ('$asignacion',
                                                    '$celular',
                                                    '$lpt',
                                                    '$otros',
                                                    '$otro_equipo',
                                                    '$imei',
                                                    '$model',
                                                    'NULL',
                                                    'NULL',
                                                    'NULL',
                                                    '$fecha_form',
                                                    '$Justificacion',
                                                    '$FechaEntrega')";
        }
    //Ejecucion de las sentencias
        $ejecutar = mysqli_query($conn,$sql);
    //Verificar la sentencia
        if(!$ejecutar){
    //    echo"Ha ocurrido un error";
            echo'<script type="text/javascript"> alert("ERROR AL GUARDAD DATOS") </script>';
        }
        else{
            $ejecutar1 = mysqli_query($conn,$sql_desc_sol);
        
                if($ejecutar1){
                    //echo"Datos guardados<br><a href='index.php'>Volver</a><br>";
                    echo'<script type="text/javascript"> 
                        alert("Los datos se guardaron exitosamente");
                        window.location = "index.php"
                        </script>';
                    //header("Location:index.php");
                
                }else{
                    echo"Ha ocurrido un error<br><br>";
                    
                }
        //header("Location: ../index.php");
        //echo'<script type="text/javascript"> alert("Los datos se guardaron exitosamente") </script>';
        }
    
    
    //if(!$ejecutar1){
        //echo"<br><br>Ha ocurrido un error con tabla Descripcion_Solicitud<br><br>";
        
    //}
    
}
?>