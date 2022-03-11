function valideKey(evt){
			
  
  var code = (evt.which) ? evt.which : evt.keyCode;
  
  if(code==8) { // backspace.
    return true;
  } else if(code>=48 && code<=57) { // is a number.
    return true;
  } else{ // other keys.
    return false;
  }
}

/***************/

function soloLetras(e) {
  var key = e.keyCode || e.which,
    tecla = String.fromCharCode(key).toLowerCase(),
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyz",
    especiales = [8, 37, 39, 46],
    tecla_especial = false;

  for (var i in especiales) {
    if (key == especiales[i]) {
      tecla_especial = true;
      break;
    }
  }

  if (letras.indexOf(tecla) == -1 && !tecla_especial) {
    return false;
  }
}
  
/* Funcion para colocar el nombre en el span "span-min" */

function minutosselecionados(){
  let TBSelect = document.getElementById("TBSelect");
  let LGL = TBSelect.value;

  if(LGL == '7'){
    document.getElementById('spanmin').innerText= '600 (ABIERTA LIMITADA)';
  }else if (LGL == '1'){
    document.getElementById('spanmin').innerText= 'Llamadas entre flotas (CERRADA ILIMITADA)';
  }else if (LGL == '2'){
    document.getElementById('spanmin').innerText= 'Llamadas entre flotas (CERRADA ILIMITADA)';
  }else if (LGL == '3'){
    document.getElementById('spanmin').innerText= 'Llamadas entre flotas (CERRADA ILIMITADA)';
  }else if (LGL == '4'){
    document.getElementById('spanmin').innerText= '300 (ABIERTA LIMITADA)';
  }else if (LGL == '5'){
    document.getElementById('spanmin').innerText= '500 (ABIERTA LIMITADA)';
  }else if (LGL == '6'){
    document.getElementById('spanmin').innerText= '500 (ABIERTA LIMITADA)';
  }else if (LGL == '8'){
    document.getElementById('spanmin').innerText= 'Abierta Ilimitada Local';
  }else if (LGL == '9'){
    document.getElementById('spanmin').innerText= 'Abierta Ilimitada/LDI/Roaming';
  }
}
  
/* Funcion para hacer un autogrow mientras se escribe en el textarea*/
function autoAdjustTextArea(o) {
  o.style.height = '1px'; // Prevent height from growing when deleting lines.
  o.style.height = o.scrollHeight + 'px';
}
  // Get a reference to the text area.
  var txtAra = document.getElementsByClassName('span-text')[0];
  // Generate some random characters of length between 150 and 300.
  txtAra.value = randChars(chars,randRange(150,300));
  // Trigger the event.
  autoAdjustTextArea(txtAra);

function showCelularContent() {
  ServicesAcces = document.getElementById("TB-sc-div");
  AsignsMinutes = document.getElementById("TB-R-div");
  AsignsService = document.getElementById("TB-as-div");
  celular = document.getElementById("celular");
  laptop = document.getElementById("lpt");
  var AddRequired = document.getElementById("TBSelect");
  lbl_otros = document.getElementById('lbl-otros');
  otros = document.getElementById("otros");
  inp_otros = document.getElementById('inp-otro')
  lbl_serial = document.getElementById('lbl-serial');
  inp_serial = document.getElementById('inp-serial');
  lbl_imei = document.getElementById('lbl-imei');
  inp_imei = document.getElementById('inp-imei');

  if (celular.checked) {
      ServicesAcces.style.display='block';
      AsignsMinutes.style.display='block';
      AsignsService.style.display='block';
      //document.getElementById('TBSelect').setAttribute ("required","");
      AddRequired.setAttribute("required", "");
      lbl_imei.style.display='block'
      inp_imei.setAttribute("required", "");   
    }else{ 
      if(!otros.checked){
        laptop.checked='true';
        lbl_serial.style.display='block'
        inp_serial.setAttribute("required", "");
      }
      ServicesAcces.style.display='none';
      AsignsMinutes.style.display='none';
      AsignsService.style.display='none';
      AddRequired.removeAttribute("required", "");
      lbl_imei.style.display='none';
      inp_imei.removeAttribute("required", "");
      inp_imei.value = "";
    }
}

function showLaptopContent(){
  celular = document.getElementById("celular");
  laptop = document.getElementById("lpt");
  var AddRequired = document.getElementById("TBSelect");
  otros = document.getElementById("otros");
  lbl_otros = document.getElementById('lbl-otros');
  inp_otros = document.getElementById('inp-otro');
  lbl_serial = document.getElementById('lbl-serial');
  inp_serial = document.getElementById('inp-serial');
  lbl_imei = document.getElementById('lbl-imei');

    if (!laptop.checked){
      if(!celular.checked){
        otros.checked='true';
        lbl_otros.style.display='block';
        inp_otros.setAttribute("required", "");
      }
      lbl_serial.style.display='none'
      inp_serial.value = "";
      inp_serial.removeAttribute("required", ""); 
    }else{
      lbl_serial.style.display='block'
      inp_serial.setAttribute("required", "");
    }
}
  
function showOtherContent() {
  celular = document.getElementById("celular");
  otros = document.getElementById("otros");
  lbl_otros = document.getElementById('lbl-otros');
  laptop = document.getElementById("lpt");
  inp_otros = document.getElementById('inp-otro')
  inp_serial = document.getElementById('inp-serial');
  lbl_imei = document.getElementById('lbl-imei');

  if (!otros.checked) {
    lbl_otros.style.display='none';
    inp_otros.value = "";
    inp_otros.removeAttribute("required", "");
    
    if(!laptop.checked){
      celular.checked='true';
      lbl_imei.style.display='block';
      inp_imei.setAttribute("required", "");
      ServicesAcces.style.display='block';
      AsignsMinutes.style.display='block';
      AsignsService.style.display='block';
      //document.getElementById('TBSelect').setAttribute ("required","");
      AddRequired.setAttribute("required", "");} 
  }else {
    lbl_otros.style.display='block';
    inp_otros.setAttribute("required", "");
  }
}