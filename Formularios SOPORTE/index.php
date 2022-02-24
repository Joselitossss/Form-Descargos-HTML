<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="style.css" media="screen">
        <link rel="stylesheet" type="text/css" href="print.css" media="print">
        <script type="text/javascript" src="Function.js"></script>
    </head>

    <body>
        <?php
            include ("conexion.php");
            $Q=mysqli_query($conn,"SELECT name from glpidb.glpi_locations" )
        ?>
        <div id="formdiv">  
            <form action="save.php" method="post">
                <div id="headform">
                    <div id="logo">
                        <img id="LogIM" src="img/logo.png" alt="ADR"/>
                    </div>
                    <div id="line-headform"></div>    
                    <div id=title>
                        <h1 id="titleN">FORMULARIO DE SOLICITUD Y CAMBIO DE EQUIPOS COMUNICACION MOVIL</h1>
                    </div>
                </div>
                <div id="fecha">
                    <label id="Date">Fecha: <input type="date" name="fecha_form" value="<?php echo date("Y-m-d");?>" require></label>
                </div>
                <div id="infoP">
                    <table>
                        <tr>
                            <th class="TB-sol-th" colspan="4">INFORMACION DEL USUARIO</th>
                        </tr>
                        <tr>
                            <td class="td-infoP"><label>Nombre del Usuario:</label><input id="inp-sol" type="text" name="Nombre_Empleado" autocomplete="off" onkeypress="return soloLetras(event)" onpaste="return false" maxlength="21"></td>
                            <td class="td-infoP"><label>Número de Empleado:</label><input id="inp-sol" type="text" name="Numero_Empleado" maxlength="4" autocomplete="off" required onkeypress="return valideKey(event);" ></td>
                        </tr>
                        <tr>
                            <td class="td-infoP"><label>Cargo/Puesto:<input id="inp-sol" type="text" name="Cargo" autocomplete="off" onkeypress="return soloLetras(event)" onpaste="return false"></label></td>
                            <td class="td-infoP"><label>No. de Flota:<input id="inp-sol" type="text" name="No_Flota" maxlength="10" autocomplete="off" onkeypress="return valideKey(event);" onpaste="return false"></label></td>
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
                                        <option value="TRANSPORTACION"></option>
                                    </datalist>
                                    <input id="inp-sol" list="DEP" type="text" name="Departamento" autocomplete="off" onkeypress="return soloLetras(event)">
                                </label>
                            </td>
                            <td class="td-infoP"><label>Extensión:<input id="inp-sol" type="text" name="Extension" maxlength="4" autocomplete="off" onkeypress="return valideKey(event);" onpaste="return false"></label></td>
                        </tr>
                        <tr>
                            <td class="td-infoP"><label>Localidad:
                                    <select id="inp-sol" name="Localidad">
                                        <?php while ($d=mysqli_fetch_array($Q))
                                        {
                                            ?>
                                                <option value="1"><?php echo $d['name'] ?></option>
                                            <?php
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
                            <td class="TB-sol-rad"><label><input type="radio" name="asig" value="Asignacion">Asignación</label></td>
                            <td class="TB-sol-rad"><label><input type="radio" name="asig" value="Prestamo">Préstamo</label></td>
                            
                        </tr>
                        <tr>
                            <td class="TB-sol-rad"><label><input type="radio" name="asig" value="Descargo">Descargo</label></td>
                            <td class="TB-sol-rad"><label><input type="radio" name="asig" value="Reparacion">Reparación</label></td>
                        </tr>
                        <tr>
                            <td class="TB-sol-rad"><label><input type="radio" name="asig" value="Cambio_equipo">Cambio de equipo</label></td>
                            <td class="TB-sol-rad"><label><input type="radio" name="asig" value="Reposicio_Sim">Reposición Sim Card</label></td>
                        </tr>
                    </table>
                </div>
                <div id="TB-equip-div">
                    <table id="TB-equip">
                        <tr>
                            <th class="TB-sol-th" colspan="4">TIPO Y MODELO DE EQUIPO</th>
                        </tr>
                        <tr>
                            <td class="TB-sol-chk"><label for="celular"><input type="checkbox" name="celular">Celular</label></td>
                            <td class="TB-sol-chk"><Label for="lpt"><input type="checkbox" name="lpt">Laptop</Label></td>
                        </tr>
                        <tr>
                            <td colspan="4" class="TB-equip-lbl"><label for="imei">IMEI/Service Tag:<input type="text" name="imei" maxlength="22"></label></td>
                        </tr>
                        <tr>
                            <td colspan="4" class="TB-equip-lbl"><label for="model">Modelo:<input type="text" name="model" maxlength="22"></label></td>
                        </tr>
                    </table>
                </div>
                <div class="TB-sc-div">
                    <table id="TB-sc">
                        <tr>
                            <th class="TB-sol-th" colspan="6">SELECCIONE LOS SERVICIOS DE ACCESO CELULAR SEGUN POLITICA</th>
                        </tr>
                        <tr>
                            <td class="TB-sol-lbl"><label><input type="radio" name="celular">Flota Abierta</label></td>
                            <td class="TB-sol-lbl"><label><input type="radio" name="celular">Flota Cerrada</label></td>
                            <td class="TB-sol-lbl"><label><input type="radio" name="celular">Lista Blanca</label></td>
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
                                <select id="TBSelect" name="AccesMovil" class="ACM" onchange="minutosselecionados();">
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
                <div>
                    <table class="TB-as">
                        <tr>
                            <th class="TB-as-th" colspan="2">ASIGNACION SERVICIO DE DATOS (SOLO SE APLICA AL PERSONAL INDICADO A CONTINUACION):</th>
                        </tr>
                        <tr>
                            <th class="TB-lbl-as"><label><input type="radio" name="Servicios_de_datos" value="Nivel_gerencia">Niveles gerenciales que por sus funciones están más del 50% de su tiempo laboral fuera de la estación de trabajo y/o deben estar disponibles fuera de horario.</label></th>
                        </tr>
                        <tr>
                            <th class="TB-lbl-as"><label><input type="radio" name="Servicios_de_datos" value="Nivel_soporte">Personal que debe dar soporte a sistemas y plataformas tecnológicas.</label></th>
                        </tr>
                        <tr>
                            <th class="TB-lbl-as"><label><input type="radio" name="Servicios_de_datos" value="Nivel_Encargado">Encargados de mantenimientos de redes eléctricas, proyectos de construcción, de redes y mantenimiento de edificios, al personal de Distribución, Control de Perdidas y Comunicaciones Estratégicas que deben dar soporte a las redes eléctricas o estar disponibles fuera de horario para atender casos de emergencias.</label></th>
                        </tr>
                    </table>
                </div>
                <div id="TB-js-div">
                    <table>
                        <tr>
                            <th class="TB-js-th">JUSTIFIQUE LA RAZON DE DICHA SOLICITUD :</th>
                        </tr>
                        <tr>     
                            <td class="inpt_PI"><span ondrop="false" class="span-text" role="textbox" contenteditable></span></td>
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
                            <label>FECHA DE ENTREGA:<input type="text" id="inpFde1"><br></label>
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
                    <input type="reset" value="Reset" />
                    <input type="submit" value="Enviar" /> <br>
                    <br>
                    <input type="button" value="Importar" />
                </div>
            </form>
        </div>
    </body>


</html>