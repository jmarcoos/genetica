<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
 <?php
 $nome_temporario=$_FILES["Arquivo"]["tmp_name"]; 
 $nome_real=$_FILES["Arquivo"]["name"]; 
 copy($nome_temporario,"Imagens/$nome_real"); 
 ?> 


</body>
</html>