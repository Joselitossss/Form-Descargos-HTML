<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="style.css">
        <script type="text/javascript" src="Function.js"></script>
    </head>

    <body>
        <div id="formdiv">  
            <form class="resize" action="conexion.php" method="post">


            
                <div id="headform">
                    <div id="logo">
                        <img id="LogIM" src="img/logo.png" alt="ADR"/>
                    </div>    
                    <div id=title>
                        <h1 id="titleN">FORMULARIOS DE SOLICITUD Y CAMBIO DE EQUIPOS COMUNICACION MOVIL</h1>
                    </div>
                </div>
                <div id="fecha">
                    <label>Fecha: <input type="date" name="fecha_form" value="<?php echo date("Y-m-d");?>"></label>
                </div>
                <div id="infoP">
                    <table>
                        <tr>
                            <th class="TB-sol-th" colspan="4">INFORMACION DEL USUARIO</th>
                        </tr>
                        <tr>
                            <td><label class="Test">Nombre del Usuario:</label></td>
                            <td class="imptxt"><input type="text" name="user_name" autocomplete="off" onkeypress="return soloLetras(event)" onpaste="return false" maxlength="21"></td>
                            <td><label>Número de Empleado:</label></td>
                            <td id="empl_num" class="imptxt"><input type="text" name="empl_num" maxlength="4" autocomplete="off" required onkeypress="return valideKey(event);" ></td>
                        </tr>
                        <tr>
                            <td><label>Cargo/Puesto:</label></td>
                            <td class="imptxt"><input type="text" name="Cargo" autocomplete="off" onkeypress="return soloLetras(event)" onpaste="return false"></td>
                            <td><label>Localidad:</label></td>
                            <td class="imptxt">
                                <datalist id="Localidad">
                                    <option value="SEDE"></option>
                                    <option value="AZUA"></option>
                                    <option value="BANI"></option>
                                    <option value="BONAO"></option>
                                    <option value="CONSTANZA"></option>
                                    <option value="COTUI"></option>
                                    <option value="DAJABON"></option>
                                    <option value="EL SEIBO"></option>
                                    <option value="GUERRA"></option>
                                    <option value="HAINA"></option>
                                    <option value="HATO MAYOR"></option>
                                    <option value="HIGUEY"></option>
                                    <option value="JARABACOA"></option>
                                    <option value="LA ROMANA"></option>
                                    <option value="LA VEGA"></option>
                                    <option value="LAS MATAS DE FARFAN"></option>
                                    <option value="LUPERON"></option>
                                    <option value="MAIMON"></option>
                                    <option value="MONTE CRISTI"></option>
                                    <option value="NAGUA"></option>
                                    <option value="PUERTO PLATA"></option>
                                    <option value="SALCEDO"></option>
                                    <option value="SAN CRISTOBAL"></option>
                                    <option value="SAN FRANCISCO DE MACORIS"></option>
                                    <option value="SAN JOSE DE OCOA"></option>
                                    <option value="SAN JUAN DE LA MAGUANA"></option>
                                    <option value="SAN PEDRO DE MACORIS"></option>
                                    <option value="SANCHEZ"></option>
                                    <option value="SANTIAGO DE LOS CABALLEROS"></option>
                                    <option value="SANTO DOMINGO ESTE"></option>
                                    <option value="SANTO DOMINGO OESTE"></option>
                                    <option value="SOSUA"></option>
                                    <option value="BARAHONA"></option>
                                </datalist>
                                <input list="Localidad" type="text" name="locate" autocomplete="off" onkeypress="return soloLetras(event)" onpaste="return false">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Departamento:</label>
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
                            </td>
                            <td class="imptxt"><input list="DEP" type="text" name="dept" autocomplete="off" onkeypress="return soloLetras(event)"></td>
                            <td><label>Extensión:</label></td>
                            <td class="imptxt"><input type="text" name="ext" maxlength="4" autocomplete="off" onkeypress="return valideKey(event);" onpaste="return false"></td>
                        </tr>
                        <tr>
                            <td><label>Imputación:</label></td>
                            <td class="imptxt"><input type="text" name="imputacion" autocomplete="off" onkeypress="return soloLetras(event)"></td>
                            <td><label>No. de Flota:</label></td>
                            <td class="imptxt"><input type="text" name="flota" maxlength="10" autocomplete="off" onkeypress="return valideKey(event);" onpaste="return false"></td>
                        </tr>
                    </table>
                </div>
                <div id="TB-sol-div">
                    <table id="TB-sol">
                        <tr>
                            <th class="TB-sol-th" colspan="4">TIPO DE SOLICITUD</th>
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
                            <td class="TB-equip-lbl"><label for="imei">IMEI/Service Tag:</label></td>
                            <td class="TB-equip-input"><input type="text" name="imei" maxlength="22"></td>
                        </tr>
                        <tr>
                            <td class="TB-equip-lbl"><label for="model">Modelo:</label></td>
                            <td class="TB-equip-input"><input type="text" name="model" maxlength="22"></td>
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
                    <table>
                        <tr>
                            <th class="TB-sol-th" colspan="2">SELECCIONE LOS SERVICIOS DE ACCESO CELULAR SEGUN POLITICA</th>
                        </tr>
                        <tr>
                            <th class="TB-R-th">RANGO</th>
                            <th class="TB-M-th">MINUTOS</th>
                        </tr>
                        <tr>    
                            <th id="TB-ACM">
                                <select name="AccesMovil" class="ACM">
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
                            </th>
                            <th class="TB-lbl-M"><label><input type="checkbox">Llamadas entre flotas (CERRADA ILIMITADA)</label></th>
                            <th class="TB-lbl-M"><label><input type="checkbox">Llamadas entre flotas (CERRADA ILIMITADA)</label></th>
                            <th class="TB-lbl-M"><label><input type="checkbox">Llamadas entre flotas (CERRADA ILIMITADA)</label></th>
                            <th class="TB-lbl-M"><label><input type="checkbox">300 (ABIERTA LIMITADA)</label></th>
                            <th class="TB-lbl-M"><label><input type="checkbox">500 (ABIERTA LIMITADA)</label></th>
                            <th class="TB-lbl-M"><label><input type="checkbox">500 (ABIERTA LIMITADA)</label></th>
                            <th class="TB-lbl-M"><label><input type="checkbox">600 (ABIERTA LIMITADA)</label></th>
                            <th class="TB-lbl-M"><label><input type="checkbox">Abierta Ilimitada Local)</label></th>
                            <th class="TB-lbl-M"><label><input type="checkbox">Abierta Ilimitada/LDI/Roaming</label></th>
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
                    <table id="TB-js">
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
                            <th class="TB-txt-th">NOTA: Los equipos pertenecen a ADR. Es responsabilidad del empleado velar por el cuidado del equipo. La empresa cubrirá hasta 1 (una) reparación en un periodo de un año y la reposición del equipo por pérdida correrán por cuenta del empleado con el monto de reposición.</th>
                        </tr>
                        <!-- name and signature -->
                    </table>

                    <table class="TB-ns">
                            <br>
                        <div class="ns1" >
                        </div>
                            <br>
                    </table>

                        <!-- end name and signature -->

 

                        <!-- dgrergerg3eg -->
                        <label for="text" class="lbl-as">Director TIC</label>
                </div>
                <table>
                    <div>
                        <th class="lbl-eq">ENTREGA DE EQUIPO (PARA USO DE TECNOLOGIA)</th>
                    </div>
                </table>
                <table>
                    <div>
                        <td class="Fde1">
                            <label>FECHA DE ENTREGA:</label>
                            <input type="text" class="inpFde1"><br>
                        </td>
                    </div>
                </table>
                <div>
                    <input type="text" class="inpFde2">
                    <label  class="Nr"> <br> Recibido por</label>
                </div>
                    <br><br>
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