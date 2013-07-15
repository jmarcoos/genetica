
/* VERIFICA SE TEM ALGUM CAMPO VAZIO: ENDERECOS */
function bairro(nomeBairro)
{

	if (bairros.nomeBairro.value.length < 1) {
	
		alert("Campo incompleto: Nome do Bairro");
		return (false);

	}

}

function logradouro(nomeLogradouro) {



	if (logradouros.nomeLogradouro.value.length < 1) {
	
		alert("Campo incompleto: Nome");
		return false;
		
	}

}

function cidade(nomeCidade) {



	if (cidades.nomeCidade.value.length < 1) {
	
		alert("Campo incompleto: Nome");
		return false;
		
	}

}

function tipoLogradouro(nomeTipoLogradouro) {



	if (TiposLogradouros.nomeTipoLogradouro.value.length < 1) {
	
		alert("Campo incompleto: Nome");
		return false;
		
	}

}

function estado(nomeEstado)
{

	if (estados.nomeEstado.value.length < 1) {
	
		alert("Campo incompleto: Nome");
		return (false);

	}

}

function endereco(codigoEstado, codigoCidade , codigoBairro , codigoTipoLogradouro, codigoLogradouro) {

	if (enderecos.codigoEstado.value == "Selecione" ||
		enderecos.codigoCidade.value == "Selecione" ||
		enderecos.codigoBairro.value == "Selecione" ||
		enderecos.codigoTipoLogradouro.value == "Selecione" ||
		enderecos.codigoLogradouro.value == "Selecione") {
	
			alert("Campos incompletos");
			return false;
	
	}

}

/* FIM: VERIFICADOR ENDERECOS */


function departamento(nomeDepartamento, especialidadeDepartamento) {



	if (departamentos.nomeDepartamento.value.length < 1 || departamentos.especialidadeDepartamento.value.length < 1) {
		
		if (departamentos.nomeDepartamento.value.length < 1 && departamentos.especialidadeDepartamento.value.length < 1) {
			alert("Campos incompletos: Nome e Descrição");
			return false;
		}		
		else if (departamentos.nomeDepartamento.value.length < 1) {
			alert("Campo incompleto: Nome");
			return false;
		}
		else if (departamentos.especialidadeDepartamento.value.length < 1) {
			alert("Campo incompleto: Descrição");
			return false;
		}
	
	}

}

function devolucao(codigoMovimentacao, dia , mes , ano) {



	if (entregar.codigoMovimentacao.value == "Selecione" || 
		entregar.dia.value.length < 1 ||
		entregar.mes.value == "Selecione" ||
		entregar.ano.value.length < 1) {
	
			alert("Campos incompletos");
			return false;
	
	}

}

function equipamento(codigoSetor, nomeEquipamento , patrimonioEquipamento) {



	if (equipamentos.patrimonioEquipamento.value.length < 1 ||
		equipamentos.nomeEquipamento.value.length < 1 ||
		equipamentos.codigoSetor.value == "Selecione") {
	
			alert("Campos incompletos");
			return false;
	
	}

}

function empresta (codigoEquipamento, dia, mes, ano)
{

	if (emprestar.codigoEquipamento.value == "Selecione" || 
		emprestar.dia.value.length < 1 ||
		emprestar.mes.value == "Selecione" ||
		emprestar.ano.value.length < 1) {
	
			alert("Campos incompletos");
			return false;
	
	}
	
}

function responsavel(codigoFuncionarioEmprestimo, codigoFuncionarioRetirada)
{

	if (emprestar.codigoFuncionarioEmprestimo.value == "Selecione" ||
		emprestar.codigoFuncionarioRetirada.value == "Selecione") {
	
			alert("Campos incompletos");
			return false;
	
	}

}

function setor(codigoDepartamento, nomeSetor) {



	if (setores.nomeSetor.value.length < 1 ||
		setores.codigoDepartamento.value == "Selecione") {
	
			alert("Campos incompletos");
			return false;
	
	}

}

function funcionario(nomeFuncionario, matriculaFuncionario, sexoFuncionario, dia, mes, ano, cpfFuncionario, codigoSetor, codigoEndereco, numeroEnderecoFuncionario, complementoEnderecoFuncionario)
{

	if (funcionarios.nomeFuncionario.value.length <1 ||
		funcionarios.matriculaFuncionario.value.length <1 ||
		funcionarios.sexoFuncionario.value == "Selecione" ||
		funcionarios.mes.value == "Selecione" ||
		funcionarios.dia.value.length <1 ||
		funcionarios.ano.value.length <1 ||
		funcionarios.cpfFuncionario.value.length <1 ||
		funcionarios.codigoSetor.value == "Selecione" ||
		funcionarios.codigoEndereco.value == "Selecione" ||
		funcionarios.numeroEnderecoFuncionario.value.length <1 ||
		funcionarios.complementoEnderecoFuncionario.value.length <1) {
	
			alert("Campos incompletos");
			return false;
		
	}
		

}

function senha(novaSenhaUsuarioFuncionario, confirmacaoSenhaUsuarioFuncionario, senhaUsuarioFuncionario, senhaAtualCorreta, codigoFuncionario) 
{

	if (senhas.novaSenhaUsuarioFuncionario.value != senhas.confirmacaoSenhaUsuarioFuncionario.value) {
		alert('Confirmacao de senha incorrreta');
		return false;
	} else {
		alert('ok');
		return false;
	}
	
	
	/*
	if(senhas.senhaAtualCorreta != senha.senhaUsuarioFuncionario.value) {
		alert('Senha Atual incorreta');
		return false;
	}
	*/

}