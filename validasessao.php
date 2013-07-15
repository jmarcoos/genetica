<?php ob_start();
/*
=============================================================
programa: validasessao.php
função: verificar acessos indevidos ao sistema
data: 
autor: Alexandre Faccioni Barcellos 
supervisao: Docente: Alexandre Faccioni Barcellos
=============================================================
*/
	session_start();

	if( (!isset($_SESSION[id])) and (!isset($_SESSION[nome])) ) {
		header('Location: erro.php'); // formulário de erro de login
	}
?> 