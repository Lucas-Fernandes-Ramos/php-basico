

<html>
<head>  <title> Curso PHP </title>

</head>


<body>
<h1>Meu primeiro programa em PHP </h1>

<?php
     $ano = $_GET["an"];
     $idade = 2014 - $ano;	 
     echo "Quem nasceu em $ano tem idade de $idade anos.<br>";
     $tipo = ($idade >=18 && $idade < 65) ? "OBRIGATORIO":"NÃO OBRIGATORIO";
	 echo "E desse forma  seu voto é $tipo";
	 
	 ?>





</body>
</html>