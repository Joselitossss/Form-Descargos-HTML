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