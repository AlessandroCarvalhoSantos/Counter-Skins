function showPassword(field, input1, input2) {

  let campo = "password";
  let notVision = "none";
  let vision = "flex";

  if (document.getElementsByName(field)[0].type == "password") {
    campo = "text";
    notVision = "flex";
    vision = "none";
  }



  document.getElementsByName(field)[0].type = campo;
  document.getElementById(input1).style.display = notVision;
  document.getElementById(input2).style.display = vision;
}


function insertTel(){

  let divGeral = document.getElementById('content-telefone');
  let num = document.getElementsByClassName('n-tel').length;

 
  num = (num==null)?1:num+1;
  
  componente =  '<div class="col-12 col-md-3 ">';
    componente +='<label for="inputNome" class="form-label"><b> <span class="n-tel">'+num+'</span>° Telefone:</b></label>';
    componente +='<i class="fas fa-trash ms-5" style="cursor:pointer;" onclick="removeTel(this)"></i> &nbsp;'; 
    componente +='<input hidden type="text" class="form-control shadow-none" name="telefoneId[]" maxlength="25" value"0" >';
    componente +='<input type="text" required class="form-control shadow-none" oninput="numberMask(this)" name="telefone[]" maxlength="25">';
  componente +='</div>';

  divGeral.innerHTML += componente

}

function removeTel(obj){
  obj.parentNode.remove();
}
