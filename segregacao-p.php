
<!DOCTYPE html>
<html>
    <head>
        <title>Segregacao p</title>
    </head>
    <body>
        <?php
			$corPai = $_POST['edtCorPai'];
			$corMae = $_POST['edtCorMae'];
			$codigoUsuario = $_POST['codigoUsuario'];

        switch ($corPai) {
            case "Negro":
                $pesoPai = 4;
                break;
            case "Mulato escuro":
                $pesoPai = 3;
                break;
            case "Mulato medio":
                $pesoPai = 2;
                break;
            case "Mulato claro":
                $pesoPai = 1;
                break;
            case "Branco":
                $pesoPai = 0;
                break;
            default:
                echo (" ERRO 1 <br>");
                break;
        }
        switch ($corMae) {
            case "Negro":
                $pesoMae = 4;
                break;
            case "Mulato escuro":
                $pesoMae = 3;
                break;
            case "Mulato medio":
                $pesoMae = 2;
                break;
            case "Mulato claro":
                $pesoMae = 1;
                break;
            case "Branco":
                $pesoMae = 0;
                break;
            default:
                echo ("	ERRO 2 <br><br>");
                break;
        }
		
        $resultado = ($pesoPai + $pesoMae) / 2;
	    $resultadoFinal = ceil($resultado);
		
			       
			if ($resultadoFinal == 4) {
				$corDoFilho="Negro";
				$gene="(aabb)";	
			}
			if ($resultadoFinal == 3) {
				$corDoFilho="Mulato escuro";
				$gene="(Aabb, aaBb)";	
			}
			if ($resultadoFinal == 2 ) {
				$corDoFilho="Mulato medio";
				$gene="(AAbb, aaBB, AaBb)";	
			}
			if ($resultadoFinal == 1) {
				$corDoFilho="Mulato claro";
				$gene="(AABb, AaBB)";	
			}
			if ($resultadoFinal == 0) {
				$corDoFilho="Branco";
				$gene="(AABB)";	
			}
			
			$corSegregacao =  $corDoFilho;
			$geneSegregacao =  $gene;
			
			
			include_once ("Classes/conexao.class.php");	
			$conn = new Conexao ();
			
			$query = "INSERT INTO Segregacoes (codigoUsuario, corSegregacao, geneSegregacao) VALUES (
			'". $codigoUsuario ."', '". $corSegregacao ."', '". $geneSegregacao ."'
			) ";
			
			mysql_query($query);
			
			//echo "$query";
			
			echo "<script language=\"javascript\" type=\"text/javascript\">";
			echo "alert(\"Cor dominante : $corDoFilho Genotipo: $gene   \");";
			echo "location.href='index.php';";
			echo "</script>";
			
			
			?>
    </body>
</html>