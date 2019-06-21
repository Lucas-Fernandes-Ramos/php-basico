<html>
<head>  <title> Curso PHP </title>
<meta charset="UTF-8"/>
</head>
<body>
<?php
 $nome  = isset($_GET["nome"])? $_GET["nome"]:"[Valor Nome Não foi informado!!]";
 $ano   = isset($_GET["ano"])?$_GET["ano"]:"[0]";
 $sexo  = isset($_GET["sexo"])?$_GET["sexo"]:"[Sexo não definido pelo úsuario]";
 $idade = date("Y") - $ano;
 echo "$nome é $sexo e tem $idade anos.";


?>
<br/>
<a href = "aula3.html"> Voltar </a>

</body>
</html>