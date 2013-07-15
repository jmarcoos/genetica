function validaForm() {
	d = document.cadastro;

	if (d.nome.value == ""){
		alert("O campo " + d.nome.name + " deve ser preenchido!");
		d.nome.focus();
		d.nome.style.backgroundColor="#00FF00";
		return false;
	}

	if (d.email.value == ""){
		alert("O campo " + d.email.name + " deve ser preenchido!");
		d.email.focus();
		d.email.style.backgroundColor="#00FF00";
		return false;
	}

	parte1 = d.email.value.indexOf("@");
	parte2 = d.email.value.indexOf(".");
	parte3 = d.email.value.length;
	if (!(parte1 >= 2 && parte2 >= 4 && parte3 >= 7)) {
		alert("O campo " + d.email.name + " deve conter um endereco eletronico!");
		d.email.focus();
		d.email.style.backgroundColor="#00FF00";
		return false;
	}

	if (!d.sexo[0].checked && !d.sexo[1].checked) {
		alert("Escolha o sexo!")
		return false;
	}	

	erro=0;
	hoje = new Date();
	anoAtual = hoje.getFullYear();
	barras = d.nascimento.value.split("/");
	if (barras.length == 3){
		dia = barras[0];
		mes = barras[1];
		ano = barras[2];
		resultado = (!isNaN(dia) && (dia > 0) && (dia < 32)) && (!isNaN(mes) && (mes > 0) && (mes < 13)) && (!isNaN(ano) && (ano.length == 4) && (ano <= anoAtual && ano >= 1900));
		if (!resultado) {
			alert("Formato de data invalido!");
			d.nascimento.focus();
			d.nascimento.style.backgroundColor="#00FF00";
			return false;
		}
	} else {
		alert("Formato de data invalido!");
		d.nascimento.focus();
		d.nascimento.style.backgroundColor="#00FF00";
		return false;
	}

	return true;
}