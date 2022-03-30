<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../css/nuevo.css" media="screen">
        <link rel="stylesheet" type="text/css" href="../css/nuevo_print.css" media="print">
        <script type="text/javascript" src="../js/Nuevo_Function.js"></script>
    </head>

    <?php
            include ("../includes/conexion.php");

            $id=$_GET['id'];

            $tc="SELECT I.id, Numero_Empleado, Nombre_Empleado, Cargo, Departamento, Localidad, Extension, No_Flota, asignacion, equipo, otro_equipo, lptserial, imei, model, impmodel, acceso, AccesMovil, Nivel_servicio_de_datos, fecha_form, Justificacion, FechaEntrega FROM Informacion_Empleado AS I, Descripcion_Solicitud AS D WHERE I.id = D.id AND I.id=$id ORDER by id ASC";
            
            $rtc=mysqli_query($conn,$tc);
            $Q=mysqli_query($conn,"SELECT id, name from glpidb.glpi_locations" );
            
            $fetch= mysqli_fetch_row($rtc);

            date_default_timezone_set('America/Santo_Domingo');
            
        
        $Numero_Empleado=$fetch['1'];
        $Nombre_Empleado=$fetch['2'];
        $Cargo=$fetch['3'];
        $Departamento=$fetch['4'];
        $Localidad=$fetch['5'];
        $Extension=$fetch['6'];
        $No_Flota=$fetch['7'];
        $asignacion=$fetch['8'];
        $equipo=$fetch['9'];
        $otro_equipo=$fetch['10'];
        $lptserial=$fetch['11'];
        $imei=$fetch['12'];
        $model=$fetch['13'];
        $impmodel=$fetch['14'];
        $acceso=$fetch['15'];
        $AccesMovil=$fetch['16'];
        $Nivel_servicio_de_datos=$fetch['17'];
        $fecha_form=$fetch['18'];
        $Justificacion=$fetch['19'];
        $FechaEntrega=$fetch['20'];

        ?>

    <body onload='Elementos()'>
        
        <div id="formdiv">
            <form action="../jp/jp_editar.php" method="post">
                <div id="headform">
                    <div id="logo">
                        <img id="LogIM" src="../img/logo.png" alt="ADR"/>
                    </div>
                    <div id="line-headform"></div>    
                    <div id=title>
                        <h1 id="titleN">FORMULARIO DE SOLICITUD Y CAMBIO DE EQUIPOS COMUNICACION MOVIL</h1>
                    </div>
                </div>
                <div id="fecha">
                    <label id="id" for="id">ID de expediente:<input id="id-form" type="text" name="id" readonly value="<?=$id?>"></label>
                    <label id="Date">Fecha: <input class="inp-sol" type="date" name="fecha_form" require value=<?=$fecha_form?>></label>
                </div>
                <div id="infoP">
                    <table>
                        <tr>
                            <th class="TB-sol-th" colspan="4">INFORMACION DEL USUARIO</th>
                        </tr>
                        <tr>
                            <td class="td-infoP"><label>Nombre del Usuario:</label><input class="inp-sol" type="text" name="Nombre_Empleado" autocomplete="off" onkeypress="return soloLetras(event)" maxlength="21" value="<?php echo $Nombre_Empleado;?>" required></td>
                            <td class="td-infoP"><label>Número de Empleado:</label><input class="inp-sol" type="text" name="Numero_Empleado" maxlength="4" autocomplete="off" value="<?=$Numero_Empleado?>" onkeypress="return valideKey(event);" ></td>
                        </tr>
                        <tr>
                            <td class="td-infoP"><label>Cargo/Puesto:<input class="inp-sol" type="text" name="Cargo" autocomplete="off" onkeypress="return soloLetras(event)" value="<?=$Cargo?>"></label></td>
                            <td class="td-infoP"><label>No. de Flota:<input class="inp-sol" type="text" name="No_Flota" maxlength="10" autocomplete="off" onkeypress="return valideKey(event);" value="<?=$No_Flota?>"></label></td>
                        </tr>
                        <tr>
                            <td class="td-infoP">
                                <label>Departamento:
                                    <datalist id="DEP">
                                        <option value="TECNOLOGIA"></option>
                                        <option value="RRHH"></option>
                                        <option value="CAJA GENERAL"></option>
                                        <option value="COMPRAS"></option>
                                        <option value="CUENTAS POR COBRAR"></option>
                                        <option value="CONTABILIDAD"></option>
                                        <option value="RELACIONES PUBLICAS"></option>
                                        <option value="TRABAJO SOCIAL"></option>
                                        <option value="RELACIONES PUBLICAS"></option>
                                        <option value="ATENCION AL USUARIO"></option>
                                        <option value="MENSAJERIA"></option>
                                        <option value="ESCUELA DE EDUCACION ESPECIAL"></option>
                                        <option value="ADMINISTRACION"></option>
                                        <option value="LABORATORIO ORTOPEDICO"></option>
                                        <option value="TRANSPORTACION"></option>
                                        <option value="DIR. SEGUROS"></option>
                                    </datalist>
                                    <input class="inp-sol" id="inp-sol1" list="DEP" type="text" name="Departamento" autocomplete="off" onkeypress="return soloLetras(event)" value="<?=$Departamento?>" required>
                                </label>
                            </td>
                            <td class="td-infoP"><label>Extensión:<input class="inp-sol" type="text" name="Extension" maxlength="4" autocomplete="off" onkeypress="return valideKey(event);" value="<?=$Extension?>"></label></td>
                        </tr>
                        <tr>
                            <td class="td-infoP"><label>Localidad:
                                    <select class="inp-sol" name="Localidad">
                                        <?php 
                                        echo '<option selected value="'.$Localidad.'">'.$Localidad.'</option>';
                                        while ($d=mysqli_fetch_array($Q)){
                                                echo '<option value="'.$d['name'].'">'.$d['name'].'</option>';
                                        }
                                        ?>
                                    </select>
                                </label>
                            </td>
                        </tr>
                    </table>
                </div>
                <div id="TB-sol-div">
                    <table id="TB-sol">
                        <tr>
                            <th class="TB-sol-th" colspan="2">TIPO DE SOLICITUD</th>
                        </tr>
                        <tr>
                            <td class="TB-sol-rad"><label><input type="radio" name="asignacion" value="Asignacion" <?php if($asignacion =='Asignacion'){echo'checked';} ?>>Asignación</label></td>
                            <td class="TB-sol-rad"><label><input type="radio" name="asignacion" value="Prestamo" <?php if($asignacion =='Prestamo'){echo'checked';} ?>>Préstamo</label></td>
                        </tr>
                        <tr>
                            <td class="TB-sol-rad"><label><input type="radio" name="asignacion" value="Descargo" <?php if($asignacion =='Descargo'){echo'checked';} ?>>Descargo</label></td>
                            <td class="TB-sol-rad"><label><input type="radio" name="asignacion" value="Reparacion" <?php if($asignacion =='Reparacion'){echo'checked';} ?>>Reparación</label></td>
                        </tr>
                        <tr>
                            <td class="TB-sol-rad"><label><input type="radio" name="asignacion" value="Cambio de Equipo" <?php if($asignacion =='Cambio de Equipo'){echo'checked';} ?>>Cambio de equipo</label></td>
                            <td class="TB-sol-rad"><label id="lbl-repSim"><input type="radio" name="asignacion" value="Reposicion de Sim" <?php if($asignacion =='Reposicion de Sim'){echo'checked';} ?>>Reposición Sim Card</label></td>
                        </tr>
                    </table>
                </div>
                <div id="TB-equip-div">
                    <table id="TB-equip">
                        <tr>
                            <th class="TB-sol-th" colspan="4">TIPO Y MODELO DE EQUIPO</th>
                        </tr>
                        <tr>
                            <td class="TB-sol-chk"><label for="celular"><input id="celular" type="radio" name="equipo" value="Celular" onclick="javascript:showCelularContent()" <?php if($equipo=='Celular'){echo'checked';}?>>Celular</label></td>
                            <td class="TB-sol-chk"><Label for="lpt"><input id="lpt" type="radio" name="equipo" value="Laptop" onclick="javascript:showLaptopContent()" <?php if($equipo=='Laptop'){echo'checked';}?>>Laptop</Label></td>
                            <td class="TB-sol-chk"><Label for="imp"><input id="imp" type="radio" name="equipo" value="Impresora" onclick="javascript:showImpContent()" <?php if($equipo=='Impresora'){echo'checked';}?>>Impresora</Label></td>
                            <td class="TB-sol-chk"><Label for="otros"><input id="otros" type="radio" name="equipo" value="Otro Equipo" onclick="javascript:showOtherContent()" <?php if($equipo=='Otro Equipo'){echo'checked';}?>>Otro</Label></td>
                        </tr>
                        <tr>
                            <td colspan="4" class="TB-equip-lbl"><label id="lbl-otros" for="equipo">Otro Equipo:<input id="inp-otro" size="32" class="inp-sol" type="text" name="otro_equipo" maxlength="22" value="<?=$otro_equipo?>"></label></td>
                        </tr>
                        <tr>
                            <td colspan="4" class="TB-equip-lbl"><label id="lbl-serial" for="serial">Serial:<input id="inp-serial" size="32" class="inp-sol" type="text" name="lptserial" maxlength="22" value="<?=$lptserial?>"></label></td>
                        </tr>
                        <tr>
                            <td colspan="4" class="TB-equip-lbl"><label id="lbl-imei"for="imei">IMEI:<input id="inp-imei" size="32" class="inp-sol" type="text" name="imei" maxlength="22" required value="<?=$imei?>"></label></td>
                        </tr>
                        <tr>
                            <td colspan="4" class="TB-equip-lbl"><label id="lbl-model" for="model">Modelo:<input id="inp-model" size="32" class="inp-sol" type="text" name="model" maxlength="22" required value="<?=$model?>"></label></td>
                        </tr>
                        <tr>
                            <td colspan="4" class="TB-equip-lbl"><label id="lbl-imp" for="modelImp">Modelo Impresora:
                                    <datalist id="Models-IMP">
                                        <option value="IMC300F"></option>
                                        <option value="IM430F"></option>
                                        <option value="P800"></option>
                                        <option value="IM3000"></option>
                                        <option value="IM550F"></option>
                                    </datalist>
                                <input id="inp-imp" size="32" list="Models-IMP" class="inp-sol" type="text" name="impmodel" maxlength="22" value="<?=$impmodel?>"></label>
                            </td>
                        </tr>
                    </table>
                </div>
                <div id="TB-sc-div">
                    <table id="TB-sc">
                        <tr>
                            <th class="TB-sol-th" colspan="6">SELECCIONE LOS SERVICIOS DE ACCESO CELULAR SEGUN POLITICA</th>
                        </tr>
                        <tr>
                            <td class="TB-sol-lbl"><label><input type="radio" name="acceso" value="Flota_Abierta" <?php if($acceso=='Flota_Abierta'){echo'checked';}?>>Flota Abierta</label></td>
                            <td class="TB-sol-lbl"><label><input type="radio" name="acceso" value="Flota_Cerrada" <?php if($acceso=='Flota_Cerrada'){echo'checked';}?>>Flota Cerrada</label></td>
                            <td class="TB-sol-lbl"><label><input type="radio" name="acceso" value="Lista_Blanca" <?php if($acceso=='Lista_Blanca'){echo'checked';}?>>Lista Blanca</label></td>
                        </tr>
                    </table>
                </div>
                <div id="TB-R-div">
                    <table id="Select-tb">
                        <tr>
                            <th class="TB-sol-th" colspan="4">ASIGNACION DE MINUTOS CELULAR</th>
                        </tr>
                        <tr>
                            <th class="TB-R-th">RANGO</th>
                            <th class="TB-M-th">MINUTOS</th>
                        </tr>
                        <tr>
                            <td id="TD-Select">
                                <select id="TBSelect" name="AccesMovil" class="ACM" onchange="minutosselecionados();" required>
                                    <option value="">Seleccione</option>
                                    <option value="1" <?php if($AccesMovil=='1'){echo'selected="selected"';}?>>Supervisores y Subgerentes: Área técnica, pérdida, comercial, distribución, tecnología</option> 
                                    <option value="2" <?php if($AccesMovil=='2'){echo'selected="selected"';}?>>Choferes y mensajeros</option> 
                                    <option value="3" <?php if($AccesMovil=='3'){echo'selected="selected"';}?>>Coordinadores (Mant. Edificio, Transportación, Almacén, Comercial, Seguridad Física e Industrial)</option>
                                    <option value="4" <?php if($AccesMovil=='4'){echo'selected="selected"';}?>>Arquitectos de Servicios Generales y coordinadores</option> 
                                    <option value="5" <?php if($AccesMovil=='5'){echo'selected="selected"';}?>>Coordinadores de Comunicaciones Estrategia y Gestión Social</option> 
                                    <option value="6" <?php if($AccesMovil=='6'){echo'selected="selected"';}?>>Gerentes Zonales y Subgerentes, Coordinadores de Comunicaciones Estrategia y Gestión Social</option> 
                                    <option value="7" <?php if($AccesMovil=='7'){echo'selected="selected"';}?>>Gerentes que se reportan a Directores</option>
                                    <option value="8" <?php if($AccesMovil=='8'){echo'selected="selected"';}?>>Directores</option>
                                    <option value="9" <?php if($AccesMovil=='9'){echo'selected="selected"';}?>>Gerente General</option>
                                </select>
                            </td>
                            <td><span class="TB-sol-lbl" id="spanmin">Llamadas entre flotas (CERRADA ILIMITADA)</span></td>
                        </tr>
                    </table>
                </div>
                <div id="TB-as-div">
                    <table class="TB-as">
                        <tr>
                            <th class="TB-as-th" colspan="2">ASIGNACION SERVICIO DE DATOS (SOLO SE APLICA AL PERSONAL INDICADO A CONTINUACION):</th>
                        </tr>
                        <tr>
                            <th class="TB-lbl-as"><label><input type="radio" name="Nivel_servicio_de_datos" <?php if($Nivel_servicio_de_datos=='Gerencia'){echo'checked';}?> value="Gerencia">Niveles gerenciales que por sus funciones están más del 50% de su tiempo laboral fuera de la estación de trabajo y/o deben estar disponibles fuera de horario.</label></th>
                        </tr>
                        <tr>
                            <th class="TB-lbl-as"><label><input type="radio" name="Nivel_servicio_de_datos" <?php if($Nivel_servicio_de_datos=='Gerencia'){echo'Soporte';}?> value="Soporte">Personal que debe dar soporte a sistemas y plataformas tecnológicas.</label></th>
                        </tr>
                        <tr>
                            <th class="TB-lbl-as"><label><input type="radio" name="Nivel_servicio_de_datos" <?php if($Nivel_servicio_de_datos=='Gerencia'){echo'Mantenimiento';}?> value="Mantenimiento" checked>Encargados de mantenimientos de redes eléctricas, proyectos de construcción, de redes y mantenimiento de edificios, al personal de Distribución, Control de Perdidas y Comunicaciones Estratégicas que deben dar soporte a las redes eléctricas o estar disponibles fuera de horario para atender casos de emergencias.</label></th>
                        </tr>
                    </table>
                </div>
                <div id="TB-js-div">
                    <table>
                        <tr>
                            <th class="TB-js-th">JUSTIFIQUE LA RAZON DE DICHA SOLICITUD :</th>
                        </tr>
                        <tr>
                            <td class="inpt_PI"><textarea  name="Justificacion" ondrop="false" class="span-text" placeholder="Escriba aquí" cols="125" onkeyup="autoAdjustTextArea(this);"><?=$Justificacion?></textarea></td>
                        </tr>
                    </table>    
                </div>    
                <div id="TB-txt">
                    <table id="TB-txt">
                        <tr>
                            <th id="TB-txt-th">NOTA:</th>
                            <th id="TB-just-th">Los equipos pertenecen a ADR. Es responsabilidad del empleado velar por el cuidado del equipo. La empresa cubrirá hasta 1 (una) reparación en un periodo de un año y la reposición del equipo por pérdida correrán por cuenta del empleado con el monto de reposición.</th>
                        </tr>
                    </table>

                    <!-- name and signature -->

                    <table class="TB-ns">
                        <tr>
                            <td class="fim-1"><div class="ns1" ></div></td>
                        </tr>
                        <tr>
                            <td class="fim-1"><label class="lbl-as">Director TIC</label></td>
                        </tr>
                    </table>                        
                </div>
                <table>
                    <tr>
                        <th class="lbl-eq">ENTREGA DE EQUIPO (PARA USO DE TECNOLOGIA)</th>
                    </tr>
                    <tr>
                        <td class="Fde1">
                            <label>FECHA DE ENTREGA:<input type="date" id="FechaEntrega" name="FechaEntrega" value="<?=$FechaEntrega?>"></label>
                        </td>
                    </tr>
                    <tr>
                        <td id="R-P"><input type="text" class="inpFde2"></td>
                    </tr>
                    <tr>
                        <td><label  class="Nr"> <br> Recibido por</label></td>
                    </tr>
                </table>
                <div id="NotPrint" class="NotPrint">
                    <input id="btn-submit" type="submit" value="Guardar" name="Guardar">
                    <input id="btn-back" type="button" onclick="location.href='../index.php'" value="Volver">
                </div>
            </form>
        </div>
    
        <script type="text/javascript" src="../js/Editar_Function.js"></script>
    </body>
    

</html>