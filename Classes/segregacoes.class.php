<?php
class Segregacoes{
	// atributos da minha classe - são similares aos atributos da tabela no banco
    private $corDoFilho;
    private $gene;
	
	
	// getters e os setters dos atributos da classe. 
	public function  __construct($corDoFilho, $gene) {
		// na instanciação do objeto atribui os valores passados por parâmetro
		$this->corDoFilho 	= $corDoFilho;
		$this->gene 		= $gene;
    }
	
    public function getCorDoFilho() {
		// retorna o codigo da área
		return $this->codigoArea;
    }
	
    public function getGene () {
		// retorna a descrição da área
		return $this->gene;
    }
	
    public function setCorDoFilho($corDoFilho) {
		// atualiza no objeto o codigo da área
		$this->corDoFilho = $corDoFilho;
    }
	
	public function setGene($gene) {
		// atualiza no objeto a descrição da área
		$this->gene = addslashes(ltrim(StrToUpper($gene)));
    }
	
	
	
	
    public function incluirSegregacao() {
		// inclui a area no banco atraves de sql embutido
        $query = "INSERT INTO segregacoes (corSegregacao, 
										   geneSegregacao)
				VALUES ('" . $this->getCorDoFilho()     . "', '" .
							 $this->getGene()  . "');";
					
		echo "$query";
       // mysql_query($query) or die(mysql_error());  // comando de execução - joga query pro banco     
    }

	
    public function excluirSegregacao($codigoSegregacao) {
		// exclui o registro do banco atraves de sql embutido
        $query = "DELETE FROM segregacoes
				  WHERE codigoSegregacao = '" . $codigoSegregacao . "';";

        echo $query;				  
		//mysql_query($query) or die(mysql_error());
    }
	
	
	
	
    public function listarSegregacao() {
		// lista todas as areas do banco atraves de sql embutido
        $query 	= "SELECT * 
				   FROM segregacoes
				   ORDER BY codigoSegregacao";
        $res 	= mysql_query($query) or die(mysql_error());

		$nr = (int)mysql_num_rows($res);
		
		// monta uma tabela com os valores retornados do result set
		echo "<div id=\"cont\">";
		echo "<table border=\"1\" align=\"center\" cellpadding=\"5px\" cellspacing=\"5px\" width=\"auto\">";
		echo "	<tr><th bgcolor=\"gray\" colspan=\"6\" align=\"center\">CONSULTA</th></tr>";
		echo "	<tr><th>C&oacute;digo</th><th>Descri&ccedil;&atilde;o</th><th colspan=\"2\" bgcolor=\"white\">Administra&ccedil;&atilde;o</th></tr>";
			  
		while($array = mysql_fetch_array($res)) {
			echo "<tr>";
			
			// parte dinâmica do código, onde é inserido os valores individuais de cada registro, através do nome do atributo na tabela.
			echo    "<td align=\"center\"> " . 	$array['corDoFilho'] 	. "</td>";
			echo    "<td><b>" . 				$array['gene'] . "</b></td>";
			echo 	"<td align=\"center\" bgcolor=\"white\"><a href=segregacao-p.php?acao=1&chave=" . $array['codigoSegregacao'] . "> <img src=\"./imagens/gridalterar.bmp\"  title=\"Alterar registro existente\"   align=\"center\" height=\"16\" width=\"16\" border=\"0\"/></a></td>";
			echo 	"<td align=\"center\" bgcolor=\"white\"><a href=segregacao-p.php?acao=2&chave=" . $array['gene'] . "> <img src=\"./imagens/gridexcluir.bmp\"  title=\"Excluir registro\"             align=\"center\" height=\"16\" width=\"16\" border=\"0\"/></a></td>";
			echo "</tr>";
		}
		echo "<tr>";
		echo    "<td align=\"right\" colspan=\"6\"  bgcolor=\"white\"><a href=\"javascript:ajax_url('segregacao-f.php', 'cont' );\" title=\"&aacute;reas\"><img src=\"./imagens/voltar.png\" width=\"24\" height=\"24\" border=\"none\"/></a><a href=\"javascript:ajax_url('areas-c.php' , 'cont' );\" title=\"atualizar\"><img src=\"./imagens/atualizar.bmp\" width=\"24\" height=\"24\" border=\"none\"/></a></td>";
		echo "</tr></table>";
		echo "</div>";
    }
	
	
	
	
	public function localizarSegregacao($codigoSegregacao) {
		$query = "SELECT s.codigoSegregacao,
						 s.corSegregacao,
						 s.geneSegregacao
				FROM segregacoes s
				WHERE s.codigoSegregacao = " . $codigoSegregacao;
        echo $query;

		$res	= mysql_query($query) or die(mysql_error());
		$nr 	= (int)mysql_num_rows($res); 
		$row 	= mysql_fetch_row($res);

		$this->setCodigoSegregacao($row[0]);
		$this->setCorSegregacao($row[1]);
		$this->setGeneSegregacao($row[2s]);
	}
}
?>