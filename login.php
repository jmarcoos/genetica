<?php
    
    ob_start();
    
    $loginUsuario = $_POST ['loginUsuario'];
    $senhaUsuario = $_POST ['senhaUsuario'];
    
    $loginUsuario = addslashes(htmlentities($_POST['loginUsuario']));
    $senhaUsuario = addslashes(htmlentities($_POST['senhaUsuario']));
    $senhaUsuario = md5($senhaUsuario);   

   
    include_once ("./Classes/conexao.class.php");
    $conn = new Conexao ();
    
    $sql = ("SELECT * FROM Usuarios WHERE loginUsuario = '$loginUsuario' AND 
            senhaUsuario = '$senhaUsuario'");
    
	echo "$sql";
	
    
    ##########################
    
    $nr = mysql_query($sql);

        @$nr = mysql_num_rows($nr);


        echo "$nr";

        if ($res == 0) {

                $row 			= mysql_fetch_row($res);
                $codigoUsuario	= $row[0]; 					// primeira atributo
                $loginUsuario	= $row[1]; 					// segundo atributo
                $senhaUsuario	= $row[2]; 					// terceiro atributo

                header('Location: index.php'); 			// redireciona o colaborador para o formulario principal
        }

        else {
                echo "	<script type='text/javascript'> 
                            alert('Falha no login! Usuario ou senha invalidos'); 
                        </script>";
               include_once ("inicio.php");
        }
    
    ###########################
    
   ?>
