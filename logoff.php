<?php
/*
=============================================================
programa: logoff.php
funчуo: fazer a desconexao com o sistema
data: 
autor: Alexandre Faccioni Barcellos 
supervisao: Docente: Alexandre Faccioni Barcellos
=============================================================
*/
	session_start();

	unset($_SESSION[id]);	// elimina a sessуo
	unset($_SESSION[nome]);

	header("Location: index.html");
?>