<?php
	$nomeUsuario = $_POST['edtNomeUsuario'];
	$loginUsuario= $_POST['edtLoginUsuario'];
	$senhaUsuario= $_POST['edtSenhaUsuario'];
	
	
	include_once ("./Classes/conexao.class.php");
	
	$conn = new Conexao();
	
	$sql = "INSERT INTO Usuarios (nomeUsuario,loginUsuario,senhaUsuario) VALUES(
	'".$nomeUsuario."','".$loginUsuario."','".md5($senhaUsuario)."');";
	
	//echo "$sql";
	mysql_query($sql);
	
	echo "<script language=\"javascript\" type=\"text/javascript\">";
	echo "alert(\"Cadastro com sucesso  \");";
	echo "location.href='index.php';";
	echo "</script>";

?>