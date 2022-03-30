window.onload= function Elementos(){
ServicesAcces = document.getElementById("TB-sc-div");
AsignsMinutes = document.getElementById("TB-R-div");
AsignsService = document.getElementById("TB-as-div");
celular = document.getElementById("celular");
laptop = document.getElementById('lpt');
var AddRequired = document.getElementById("TBSelect");
lbl_otros = document.getElementById('lbl-otros');
otros = document.getElementById("otros");
inp_otros = document.getElementById('inp-otro')
lbl_serial = document.getElementById('lbl-serial');
inp_serial = document.getElementById('inp-serial');
lbl_imei = document.getElementById('lbl-imei');
inp_imei = document.getElementById('inp-imei');
lbl_repSim = document.getElementById('lbl-repSim');
imp= document.getElementById("imp");
lbl_imp = document.getElementById("lbl-imp");
lbl_model = document.getElementById("lbl-model");
inp_model = document.getElementById("inp-model");
inp_imp= document.getElementById("inp-imp");
ValorLPT = document.getElementById('lpt').hasAttribute('checked');
ValorOtros = document.getElementById('otros').hasAttribute('checked');
ValorCelular = document.getElementById('celular').hasAttribute('checked');
ValorImp= document.getElementById("imp").hasAttribute('checked');


if(ValorLPT) {
       
  //Ocultar valores de Celular
  ServicesAcces.style.display='none';
  AsignsMinutes.style.display='none';
  AsignsService.style.display='none';
  AddRequired.removeAttribute("required", "");
  lbl_imei.style.display='none'
  inp_imei.removeAttribute("required", "");
  lbl_repSim.style.display='none';   

  //Mostrar valores de Laptop
  lbl_serial.style.display='block';
  inp_serial.setAttribute("required", "");
  lbl_model.style.display ='block';
  inp_model.setAttribute("required", "");

  //Ocultar valor de Impresora
  lbl_imp.style.display='none';
  inp_imp.removeAttribute("required", "");

  //Ocultar valores de Otro
  lbl_otros.style.display='none';
  inp_otros.removeAttribute("required", "");
  
}else if(ValorOtros) {
      //Ocultar valores de Celular
      ServicesAcces.style.display='none';
      AsignsMinutes.style.display='none';
      AsignsService.style.display='none';
      AddRequired.removeAttribute("required", "");
      lbl_imei.style.display='none'
      inp_imei.removeAttribute("required", "");
      lbl_repSim.style.display='none';

      //Ocultar valor de Impresora
      lbl_imp.style.display='none';
      inp_imp.removeAttribute("required", "");

      //Mostrar valores de Otro
      lbl_otros.style.display='block';
      inp_otros.setAttribute("required", "");
      lbl_serial.style.display='block';
      inp_serial.setAttribute("required", "");
      lbl_model.style.display ='block';
      inp_model.setAttribute("required", "");

}else if(ValorCelular){
      //Mostrar valores de Celular
      ServicesAcces.style.display='block';
      AsignsMinutes.style.display='block';
      AsignsService.style.display='block';
      AddRequired.setAttribute("required", "");
      lbl_imei.style.display='block'
      inp_imei.setAttribute("required", "");
      lbl_repSim.style.display='block';
      lbl_model.style.display ='block';

      //Ocultar valores de Laptop
      lbl_serial.style.display='none';
      inp_serial.removeAttribute("required", "");

      //Ocultar valor de Impresora
      lbl_imp.style.display='none';
      inp_imp.removeAttribute("required", "");

      //Ocultar valores de Otro
      lbl_otros.style.display='none';
      inp_otros.removeAttribute("required", "");

}else if(ValorImp){ 
        //Ocultar valores de Celular
      ServicesAcces.style.display='none';
      AsignsMinutes.style.display='none';
      AsignsService.style.display='none';
      AddRequired.removeAttribute("required", "");
      lbl_imei.style.display='none'
      inp_imei.removeAttribute("required", "");
      lbl_repSim.style.display='none';

      //Ocultar valores de Laptop
      lbl_model.style.display ='none';
      inp_model.removeAttribute("required", "");

      //Mostrar valor de Impresora
      lbl_serial.style.display='block';
      inp_serial.setAttribute("required", "");
      lbl_imp.style.display='block';
      inp_imp.setAttribute("required", "");

      //Ocultar valores de Otro
      lbl_otros.style.display='none';
      inp_otros.removeAttribute("required", "");
      }
}