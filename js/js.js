// JavaScript Document
//Validação do Campo de Email
function validacaoEmail(field) {
usuario = field.value.substring(0, field.value.indexOf("@"));
dominio = field.value.substring(field.value.indexOf("@")+ 1, field.value.length);

if ((usuario.length >=1) &&
    (dominio.length >=3) && 
    (usuario.search("@")==-1) && 
    (dominio.search("@")==-1) &&
    (usuario.search(" ")==-1) && 
    (dominio.search(" ")==-1) &&
    (dominio.search(".")!=-1) &&      
    (dominio.indexOf(".") >=1)&& 
    (dominio.lastIndexOf(".") < dominio.length - 1)) {
document.getElementById("msgemail").innerHTML="E-mail válido";
alert("E-mail valido");
}
else{
document.getElementById("msgemail").innerHTML="<font color='red'>E-mail inválido </font>";
alert("E-mail invalido");
}
}
//Slider
jQuery(document).ready(function(){
    jQuery('#slider').nivoSlider({
		effect:'random',
		directionNav: false,
		controlNav:false,
		pauseTime:5000
	});
});

//Máscara de Telefone
function fw_mascara(input, formato){
	var posicao=0,resultado='',i=0,conjunto=null;//;alert(input.value.length);
	conjunto='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZáàãâäÁÀÃÂÄéèêëÉÈÊËíìîïÍÌÎÏóòõôöÓÒÕÔÖúùûüÚÙÛÜçÇñÑ';
	while(i<input.value.length && posicao<formato.length){
		switch(formato.charAt(posicao)){
			case '#':
				if(!isNaN(input.value.charAt(i)) && input.value.charAt(i)!=' '){
					resultado+=input.value.charAt(i);
					posicao++;
				}
				i++;
				break;
			case '&':
				if(conjunto.indexOf(input.value.charAt(i))>=0){
					resultado+=input.value.charAt(i);
					posicao++;
				}
				i++;
				break;
			default:
				resultado+=formato.charAt(posicao);
				posicao++;
				break;
		}
	}
	input.value=resultado;
}


//Validação de Campos
          function checkrequired(which) {
          var pass=true;
          if (document.images) {
          for (i=0;i<which.length;i++) {
          var tempobj=which.elements[i];
          if (tempobj.name.substring(0,8)=="required") {
          if (((tempobj.type=="text"||tempobj.type=="textarea")&&
          tempobj.value=='')||(tempobj.type.toString().charAt(0)=="s"&&
          tempobj.selectedIndex==0)) {
          pass=false;
          break;
                   }
                }
             }
          }
          if (!pass) {
          shortFieldName=tempobj.name.substring(8,30).toUpperCase();
          alert("O seguinte campo "+shortFieldName+" deve ser preenchido.");
          return false;
          }
          else
          return true;
          }

//Máscara de Moeda
		function MascaraMoeda(objTextBox, SeparadorMilesimo, SeparadorDecimal, e){
			var sep = 0;
			var key = '';
			var i = j = 0;
			var len = len2 = 0;
			var strCheck = '0123456789';
			var aux = aux2 = '';
			var whichCode = (window.Event) ? e.which : e.keyCode;
			if (whichCode == 13) return true;
			key = String.fromCharCode(whichCode); // Valor para o código da Chave
			if (strCheck.indexOf(key) == -1) return false; // Chave inválida
			len = objTextBox.value.length;
			for(i = 0; i < len; i++)
				if ((objTextBox.value.charAt(i) != '0') && (objTextBox.value.charAt(i) != SeparadorDecimal)) break;
			aux = '';
			for(; i < len; i++)
				if (strCheck.indexOf(objTextBox.value.charAt(i))!=-1) aux += objTextBox.value.charAt(i);
			aux += key;
			len = aux.length;
			if (len == 0) objTextBox.value = '';
			if (len == 1) objTextBox.value = '0'+ SeparadorDecimal + '0' + aux;
			if (len == 2) objTextBox.value = '0'+ SeparadorDecimal + aux;
			if (len > 2) {
				aux2 = '';
				for (j = 0, i = len - 3; i >= 0; i--) {
					if (j == 3) {
						aux2 += SeparadorMilesimo;
						j = 0;
					}
					aux2 += aux.charAt(i);
					j++;
				}
				objTextBox.value = '';
				len2 = aux2.length;
				for (i = len2 - 1; i >= 0; i--)
				objTextBox.value += aux2.charAt(i);
				objTextBox.value += SeparadorDecimal + aux.substr(len - 2, len);
			}
			return false;
		}



