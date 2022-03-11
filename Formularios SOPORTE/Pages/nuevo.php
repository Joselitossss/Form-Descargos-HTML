<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../css/nuevo.css" media="screen">
        <link rel="stylesheet" type="text/css" href="../css/nuevo_print.css" media="print">
        <script type="text/javascript" src="../js/Nuevo_Function.js"></script>
    </head>

    <body>
        <?php
            include ("../includes/conexion.php");
            $Q=mysqli_query($conn,"SELECT id, name from glpidb.glpi_locations" )
        ?>
        <div id="formdiv">
            <form action="../save.php" method="post">
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
                    <label id="Date">Fecha: <input class="inp-sol" type="date" name="fecha_form" value="<?php echo date("Y-m-d");?>" require></label>
                </div>
                <div id="infoP">
                    <table>
                        <tr>
                            <th class="TB-sol-th" colspan="4">INFORMACION DEL USUARIO</th>
                        </tr>
                        <tr>
                            <td class="td-infoP"><label>Nombre del Usuario:</label><input class="inp-sol" type="text" name="Nombre_Empleado" autocomplete="off" onkeypress="return soloLetras(event)" maxlength="21" required></td>
                            <td class="td-infoP"><label>Número de Empleado:</label><input class="inp-sol" type="text" name="Numero_Empleado" maxlength="4" autocomplete="off" onkeypress="return valideKey(event);" ></td>
                        </tr>
                        <tr>
                            <td class="td-infoP"><label>Cargo/Puesto:<input class="inp-sol" type="text" name="Cargo" autocomplete="off" onkeypress="return soloLetras(event)"></label></td>
                            <td class="td-infoP"><label>No. de Flota:<input class="inp-sol" type="text" name="No_Flota" maxlength="10" autocomplete="off" onkeypress="return valideKey(event);"></label></td>
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
                                    <input class="inp-sol" id="inp-sol1" list="DEP" type="text" name="Departamento" autocomplete="off" onkeypress="return soloLetras(event)" required>
                                </label>
                            </td>
                            <td class="td-infoP"><label>Extensión:<input class="inp-sol" type="text" name="Extension" maxlength="4" autocomplete="off" onkeypress="return valideKey(event);"></label></td>
                        </tr>
                        <tr>
                            <td class="td-infoP"><label>Localidad:
                                    <select class="inp-sol" name="Localidad">
                                        <?php 
                                        $selected= "SEDE";
                                        while ($d=mysqli_fetch_array($Q)){
                                            if($selected == $d['name']){
                                                echo '<option selected='.'"selected"'.'value="'.$d['id'].'">'.$d['name'].'</option>';
                                            }else{
                                                echo '<option value="'.$d['name'].'">'.$d['name'].'</option>';
                                            }
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
                            <td class="TB-sol-rad"><label><input type="radio" name="asignacion" value="Asignacion" checked>Asignación</label></td>
                            <td class="TB-sol-rad"><label><input type="radio" name="asignacion" value="Prestamo">Préstamo</label></td>
                        </tr>
                        <tr>
                            <td class="TB-sol-rad"><label><input type="radio" name="asignacion" value="Descargo">Descargo</label></td>
                            <td class="TB-sol-rad"><label><input type="radio" name="asignacion" value="Reparacion">Reparación</label></td>
                        </tr>
                        <tr>
                            <td class="TB-sol-rad"><label><input type="radio" name="asignacion" value="Cambio de Equipo">Cambio de equipo</label></td>
                            <td class="TB-sol-rad"><label><input type="radio" name="asignacion" value="Reposicion de Sim">Reposición Sim Card</label></td>
                        </tr>
                    </table>
                </div>
                <div id="TB-equip-div">
                    <table id="TB-equip">
                        <tr>
                            <th class="TB-sol-th" colspan="3">TIPO Y MODELO DE EQUIPO</th>
                        </tr>
                        <tr>
                            <td class="TB-sol-chk"><label for="celular"><input id="celular" type="checkbox" name="celular" onchange="javascript:showContent()" checked>Celular</label></td>
                            <td class="TB-sol-chk"><Label for="lpt"><input id="lpt" type="checkbox" name="lpt" onchange="javascript:autocheck()">Laptop</Label></td>
                            <td class="TB-sol-chk"><Label for="otros"><input id="otros" type="checkbox" name="otros" onchange="javascript:showOther()">Otro</Label></td>
                        </tr>
                        <tr>
                            <td colspan="3" class="TB-equip-lbl"><label id="lbl-otros" for="equipo">Otro Equipo:<input id="inp-otro" size="32" class="inp-sol" type="text" name="otro_equipo" maxlength="22"></label></td>
                        </tr >
                        <tr>
                            <td colspan="3" class="TB-equip-lbl"><label for="imei">IMEI/Service Tag:<input size="32" class="inp-sol" type="text" name="imei" maxlength="22" required></label></td>
                        </tr>
                        <tr>
                            <td colspan="3" class="TB-equip-lbl"><label for="model">Modelo:<input size="32" class="inp-sol" type="text" name="model" maxlength="22" required></label></td>
                        </tr>
                    </table>
                </div>
                <div id="TB-sc-div">
                    <table id="TB-sc">
                        <tr>
                            <th class="TB-sol-th" colspan="6">SELECCIONE LOS SERVICIOS DE ACCESO CELULAR SEGUN POLITICA</th>
                        </tr>
                        <tr>
                            <td class="TB-sol-lbl"><label><input type="radio" name="acceso" value="Flota_Abierta">Flota Abierta</label></td>
                            <td class="TB-sol-lbl"><label><input type="radio" name="acceso" value="Flota_Cerrada" checked>Flota Cerrada</label></td>
                            <td class="TB-sol-lbl"><label><input type="radio" name="acceso" value="Lista_Blanca">Lista Blanca</label></td>
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
                                    <option value="1">Supervisores y Subgerentes: Área técnica, pérdida, comercial, distribución, tecnología</option> 
                                    <option value="2">Choferes y mensajeros</option> 
                                    <option value="3">Coordinadores (Mant. Edificio, Transportación, Almacén, Comercial, Seguridad Física e Industrial)</option>
                                    <option value="4">Arquitectos de Servicios Generales y coordinadores</option> 
                                    <option value="5">Coordinadores de Comunicaciones Estrategia y Gestión Social</option> 
                                    <option value="6">Gerentes Zonales y Subgerentes, Coordinadores de Comunicaciones Estrategia y Gestión Social</option> 
                                    <option value="7">Gerentes que se reportan a Directores</option>
                                    <option value="8">Directores</option>
                                    <option value="9">Gerente General</option>
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
                            <th class="TB-lbl-as"><label><input type="radio" name="Nivel_servicio_de_datos" value="Gerencia">Niveles gerenciales que por sus funciones están más del 50% de su tiempo laboral fuera de la estación de trabajo y/o deben estar disponibles fuera de horario.</label></th>
                        </tr>
                        <tr>
                            <th class="TB-lbl-as"><label><input type="radio" name="Nivel_servicio_de_datos" value="Soporte">Personal que debe dar soporte a sistemas y plataformas tecnológicas.</label></th>
                        </tr>
                        <tr>
                            <th class="TB-lbl-as"><label><input type="radio" name="Nivel_servicio_de_datos" value="Mantenimiento" checked>Encargados de mantenimientos de redes eléctricas, proyectos de construcción, de redes y mantenimiento de edificios, al personal de Distribución, Control de Perdidas y Comunicaciones Estratégicas que deben dar soporte a las redes eléctricas o estar disponibles fuera de horario para atender casos de emergencias.</label></th>
                        </tr>
                    </table>
                </div>
                <div id="TB-js-div">
                    <table>
                        <tr>
                            <th class="TB-js-th">JUSTIFIQUE LA RAZON DE DICHA SOLICITUD :</th>
                        </tr>
                        <tr>
                            <td class="inpt_PI"><textarea name="Justificacion" ondrop="false" class="span-text" placeholder="Escriba aquí" cols="125" onkeyup="autoAdjustTextArea(this);"></textarea></td>
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
                            <label>FECHA DE ENTREGA:<input type="date" id="FechaEntrega" name="FechaEntrega" value="<?php echo date("Y-m-d");?>"><br></label>
                        </td>
                    </tr>
                    <tr>
                        <td id="R-P"><input type="text" class="inpFde2"></td>
                    </tr>
                    <tr>
                        <td><label  class="Nr"> <br> Recibido por</label></td>
                    </tr>
                </table>
                <div id="buttons.NotPrint" class="NotPrint">
                    <input type="reset" value="Reset">
                    <input type="submit" value="Enviar" name="Enviar"> <br>
                    <br>
                    <input type="button" onclick="location.href='../index.php'" value="Buscar">
                </div>
            </form>
        </div>
    </body>


</html>