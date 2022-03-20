<?php   

include ("../includes/conexion.php");

if(isset($_REQUEST['Guardar'])){

    //Recuperar las variables
        $id=$_POST['id'];
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
        $equipo=$_POST['equipo'];
        //$celular= (bool) $_POST ['celular'];
        //$lpt= (bool) $_POST ['lpt'];
        //$otros= (bool) $_POST ['otros'];
        $otro_equipo = $_POST['otro_equipo'];
        $imei=$_POST ['imei'];
        $model=$_POST ['model'];
        $acceso=$_POST ['acceso'];
        $AccesMovil=$_POST ['AccesMovil'];
        $Nivel_servicio_de_datos=$_POST ['Nivel_servicio_de_datos'];
        $fecha_form=$_POST ['fecha_form'];
        $Justificacion=$_POST ['Justificacion'];
        $FechaEntrega=$_POST ['FechaEntrega'];
        $lptserial=$_POST['lptserial'];
        
        //if ($celular!=1){$celular=0;}
        //if ($lpt!=1){$lpt=0;}
        //if ($otros!=1){$otros=0;}
        
        //Tipo y modelo de equipo
    
        //Servicios de acceso
    
        //Asignacion de minutos de celular
    
    //Hacer sentencia de SQL para la tabla de Informacion_Empleado
        $sql= "UPDATE form_descargo.Informacion_Empleado SET Numero_Empleado='$Numero_Empleado', Nombre_Empleado='$Nombre_Empleado', Cargo='$Cargo', Departamento='$Departamento', Localidad='$Localidad', Extension='$Extension', No_Flota='$No_Flota' WHERE id like '$id'";
    
    //Hacer sentencia de SQL para la tabla de Descripcion_Solicitud
        if($equipo=='Celular'){
        $sql_desc_sol="UPDATE form_descargo.Descripcion_Solicitud SET asignacion='$asignacion', equipo='$equipo', otro_equipo='NULL', lptserial='NULL', imei='$imei', model='$model', acceso='$acceso', AccesMovil='$AccesMovil', Nivel_servicio_de_datos='$Nivel_servicio_de_datos', fecha_form='$fecha_form', Justificacion='$Justificacion', FechaEntrega='$FechaEntrega' WHERE id like '$id'";
        }else if($equipo=='Laptop'){
        $sql_desc_sol="UPDATE form_descargo.Descripcion_Solicitud SET asignacion='$asignacion', equipo='$equipo', otro_equipo='NULL', lptserial='$lptserial', imei='NULL', model='$model', acceso='NULL', AccesMovil='NULL', Nivel_servicio_de_datos='NULL', fecha_form='$fecha_form', Justificacion='$Justificacion', FechaEntrega='$FechaEntrega' WHERE id like '$id'";
        }else{
        $sql_desc_sol="UPDATE form_descargo.Descripcion_Solicitud SET asignacion='$asignacion', equipo='$equipo', otro_equipo='$otro_equipo', lptserial='$lptserial', imei='NULL', model='$model', acceso='NULL', AccesMovil='NULL', Nivel_servicio_de_datos='NULL', fecha_form='$fecha_form', Justificacion='$Justificacion', FechaEntrega='$FechaEntrega' WHERE id like '$id'";
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
                        alert("Formulario Modificado");
                        window.location = "../index.php"
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