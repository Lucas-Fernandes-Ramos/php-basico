
<html>
<head>  <title> Curso PHP </title>
<meta charset="UTF-8"/>
</head>
<body>
<?php
$valor = $_GET["v"];
$rq = sqrt($valor);

echo "O Valor enviado foi $valor <br/>";
echo "A Raiz quadrada do numero $valor é = $rq";

?>
<br/>
<a href = "aula02.php"> Voltar </a>

</body>
</html>