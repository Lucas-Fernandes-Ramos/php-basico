
<html>
<head>  <title> Curso PHP </title>
<meta charset="UTF-8"/>

</head>
<body>

<?php

$numero = isset($_GET["num"])? $_GET["num"]:0;

$operacao = isset($_GET["oper"])? $_GET["oper"]:1;

switch ($operacao){
        case  1:
		$resultado = $numero * 2;
		break;
		
		case 2:
		$resultado = pow($numero,3);
		break;
		
		case 3:
		$resultado = sqrt($numero);

}
echo "Resultado da operação  = $resultado";
?>



<br/>
<a href = "aula6.html"> Voltar </a>

</body>
</html>