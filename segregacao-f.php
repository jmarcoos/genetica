<!--
    Autor: João Marcos
-->
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
      
    </head>
    <body>
	<h2 align="center">
    Demonstração da segregação entre dois individuos
    </h2>
        <form name="segregacao" method="post" action="segregacao-p.php" >
            <table align="center" border="0">
                <tr>
					<td><a href="javascript:ajax_url('segregacao-c.php' , 'conteudo' );">CONSULTA</a></td>
				</tr>
				<tr>
					<td>Codigo de usuario:</td>
					<td>
						<select name="codigoUsuario">
							<?php
								include_once("./Classes/conexao.class.php");
								$conn 	= new Conexao();
								$query	= "	SELECT codigoUsuario, nomeUsuario
										FROM Usuarios
										ORDER BY nomeUsuario";
								
								$res 	= mysql_query($query) or die(mysql_error());
								$nr = (int)mysql_num_rows($res);
								
								While ($array = mysql_fetch_array($res)){
									
									echo "<option value=" . $array['codigoUsuario'] . ">" . $array['nomeUsuario'] . "</option>" ;
								}
							?>
						</select>				
					</td>
				</tr>
				<tr>
                    <td>Pai</td>
                    <td>
                        <select name="edtCorPai">
                            <option> 	Negro					</option>				
                            <option> 	Mulato escuro			</option>		
                            <option> 	Mulato medio			</option>		
                            <option> 	Mulato claro			</option>		
                            <option> 	Branco					</option>				
                        </select>				
                    </td>
                </tr>
                <tr>
                    <td>M&atilde;e</td>
                    <td>
                        <select name="edtCorMae">
                            <option> 	Negro					</option>				
                            <option> 	Mulato escuro			</option>		
                            <option> 	Mulato medio			</option>		
                            <option> 	Mulato claro			</option>		
                            <option> 	Branco					</option>	
                        </select>					
                    </td>
                                      <td>

                        <input 	type="submit"
                                name="enviar" 
                                value="Enviar" 
                                title="Irá trazer o resultado"
                                >
                    </td>
					<br><br>
                </tr>
                
                </table>
                <table align="center" border="1">
                <br><br>
                <tr>
                    <td class="tabela2">
                        Fenótipos:<br>
                        (Características)
                    </td>
                    <td>              
                         Pele clara				<br>
                         Mulato claro			<br>
                         Mulato médio 			<br>
                         Mulato escuro			<br>
                         Pele negra				<br>
                    </td>
                </tr>
                <tr>
                    <td class="tabela2">
                        Genótipos:<br>
                        (Alelos)
                    </td>
                
                    <td>              
                        (aabb)				<br>
                        (Aabb, aaBb)		<br>
                        (AAbb, aaBB, AaBb)	<br>
                        (AABb, AaBB)		<br>
                        (AABB)				<br>
                	</td>
                 </tr>
                </table>
                
               
        </form>
    </body>
</html>
