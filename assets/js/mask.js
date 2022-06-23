function cpfMask(cpf) {
  cpf.setAttribute("maxlength", "14");
  temp = cpf.value;
  temp = temp.replace(/\D/g, "");
  temp = temp.replace(/(\d{3})(\d)/, "$1.$2");
  temp = temp.replace(/(\d{3})(\d)/, "$1.$2");
  temp = temp.replace(/(\d{3})(\d{1,2})$/, "$1-$2");

  cpf.value = temp;
}



function stringMask(texto) {

  var temp = texto.value;
  temp = temp.replace(/([^a-zà-úA-ZÀ-Ú \-\".])/, "");
  texto.value = temp.toUpperCase();

}


function string(texto) {

  var temp = texto.value;
  temp = temp.replace(/([^a-zà-úA-ZÀ-Ú0-9 ()!@$%&*+#\-.{}\[\]])/, "");
  texto.value = temp

}


function loginMask(texto) {

  var temp = texto.value;
  temp = temp.replace(/([^a-zA-Z0-9_])/, "");
  texto.value = temp;

}


function emailMask(email) {

  var temp = email.value;
  temp = temp.replace(/([^a-zA-Z0-9_@.])/, "");
  email.value = temp;
}


function telefoneMask(contato) {

  var temp = contato.value;
  contato.setAttribute("maxlength", "13");
  temp = temp.replace(/\D/g, "");
  temp = temp.replace(/(\d{2})(\d)/, "($1)$2");
  temp = temp.replace(/(\d{4})(\d)/, "$1-$2");
  temp = temp.replace(/(\d{4})(\d{1,2})$/, "$1 $2");
  contato.value = temp;
}

function celularMask(contato) {

  var temp = contato.value;
  contato.setAttribute("maxlength", "14");
  temp = temp.replace(/\D/g, "");
  temp = temp.replace(/(\d{2})(\d)/, "($1)$2");
  temp = temp.replace(/(\d{5})(\d)/, "$1-$2");
  contato.value = temp;
}

function ufMask(uf) {

  var temp = uf.value;

  uf.setAttribute("maxlength", "2");
  temp = temp.replace(/([^a-zA-Z])/, "");
  temp = temp.toUpperCase();
  uf.value = temp;
}

function pisPasepMask(pis) {
  pis.setAttribute("maxlength", "14");

  temp = pis.value;
  temp = temp.replace(/\D/g, "")
  temp = temp.replace(/^(\d{3})(\d)/, "$1.$2")
  temp = temp.replace(/^(\d{3})\.(\d{5})(\d)/, "$1.$2.$3")
  temp = temp.replace(/(\d{3})\.(\d{5})\.(\d{2})(\d)/, "$1.$2.$3-$4")
  pis.value = temp;
}



function cepMask(cep) {
  var temp = cep.value;
  cep.setAttribute("maxlength", "9");
  temp = temp.replace(/\D/g, "");
  temp = temp.replace(/(\d{5})(\d)/, "$1-$2");
  cep.value = temp;
}


function rgMask(rg) {
  rg.setAttribute("maxlength", "12");

  temp = rg.value;
  temp = temp.replace(/\D/g, "")
  temp = temp.replace(/^(\d{2})(\d)/, "$1.$2")
  temp = temp.replace(/^(\d{2})\.(\d{3})(\d)/, "$1.$2.$3")
  temp = temp.replace(/(\d{2})\.(\d{3})\.(\d{3})(\d)/, "$1.$2.$3-$4")
  rg.value = temp;
}


function numberMask(num, tam =20) {
  var temp = num.value;
  num.setAttribute("maxlength", tam);
  temp = num.value;
  temp = temp.replace(/\D/g, "");
  num.value = temp;
}


