
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
			include_once ("Classes/conexao.class.php");	
			$conn = new Conexao ();
		
			$sql = "SELECT u.nomeUsuario,s.codigoSegregacao,s.corSegregacao,s.geneSegregacao FROM Segregacoes s
			INNER JOIN  Usuarios u ON u.codigoUsuario = s.codigoUsuario "; //Comando SQL
			
			//echo "$sql";
			
			$res = mysql_query($sql); //Guarda a execução do comando SQL em $res


			$nr = mysql_num_rows($res); //Obtem o número de linhas recebidas no select

			//Monta a tabela

			echo "
			<table align = \"center\" border = \"0\"> 
			<tr>
				<th> C&oacute;digo segrega&ccedil;&atilde;o </th>
				<th> Usu&aacute;rio </th>
				<th> Cor </th>
				<th> Gene </th>
			</tr>";          
			while ($array = mysql_fetch_array($res)) {
			echo "<tr>";
			echo    "<td align=\"center\"> "  .   $array['codigoSegregacao'] 	. "</td>";
			echo    "<td align=\"center\" >"  .   $array['nomeUsuario'] . "</b></td>";
			echo    "<td align=\"center\">"   .   $array['corSegregacao'] . "</b></td>";
			echo    "<td align=\"center\">"   .   $array['geneSegregacao'] . "</b></td>";
			echo "</tr>";
			}
		?>
	</body>
</html>