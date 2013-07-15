<?php

				$arquivo		= $_FILES["upload"];				
				
				$caminho = "uploads/" . $arquivo["name"];
				
				// Faz o upload da imagem para seu respectivo caminho
				move_uploaded_file($arquivo["tmp_name"], $caminho);		
				
				echo "<script language=\"javascript\" type=\"text/javascript\">";
				echo "alert(\"Upload concluido\");";
				echo "location.href='index.php';";
				echo "</script>";				

?>