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

function showContent() {
  ServicesAcces = document.getElementById("TB-sc-div");
  AsignsMinutes = document.getElementById("TB-R-div");
  AsignsService = document.getElementById("TB-as-div");
  check = document.getElementById("celular");
  checklpt = document.getElementById("lpt");
  var AddRequired = document.getElementById("TBSelect");
  tr_otros=document.getElementById('lbl-otros');
  checkotro = document.getElementById("otros");
  inpOtro = document.getElementById('inp-otro')

  if (check.checked) {
      ServicesAcces.style.display='block';
      AsignsMinutes.style.display='block';
      AsignsService.style.display='block';
      //document.getElementById('TBSelect').setAttribute ("required","");
      AddRequired.setAttribute("required", "");   
    }else{ 
      if(!checkotro.checked){
        checklpt.checked='true';
      }
      ServicesAcces.style.display='none';
      AsignsMinutes.style.display='none';
      AsignsService.style.display='none';
      AddRequired.removeAttribute("required", "");
    }
}

function autocheck(){
    check = document.getElementById("celular");
    checklpt = document.getElementById("lpt");
    var AddRequired = document.getElementById("TBSelect");
    checkotro = document.getElementById("otros");
    tr_otros=document.getElementById('lbl-otros');
    inpOtro = document.getElementById('inp-otro')

    if (!checklpt.checked){
      if(!check.checked){
        checkotro.checked='true';
        tr_otros.style.display='none';
        inpOtro.removeAttribute("required", "");
      } 
      if(!check.checked){
        tr_otros.style.display='block';
        inpOtro.setAttribute("required", "");
      }
    }
}
  
function showOther() {
  check = document.getElementById("celular");
  checkotro = document.getElementById("otros");
  tr_otros=document.getElementById('lbl-otros');
  checklpt = document.getElementById("lpt");
  inpOtro = document.getElementById('inp-otro')

  if (!checkotro.checked) {
      tr_otros.style.display='none';
      inpOtro.removeAttribute("required", "");
      if(!checklpt.checked){check.checked='true';
      ServicesAcces.style.display='block';
      AsignsMinutes.style.display='block';
      AsignsService.style.display='block';
      //document.getElementById('TBSelect').setAttribute ("required","");
      AddRequired.setAttribute("required", "");  } 
  }else {
      tr_otros.style.display='block';
      inpOtro.setAttribute("required", "");
  }
}