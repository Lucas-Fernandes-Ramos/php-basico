
<html>
<head>  <title> Curso PHP </title>
<meta charset="UTF-8"/>

</head>
<body>

<?php

$numero = isset($_GET["num"])? $_GET["num"]:0;
echo "Voce informou o Numero = $numero <br/>";


$fatorial = isset($_GET["fat"])? $_GET["fat"]:1;
echo "Voce informou o Numero = $fatorial para o Fatorial <br/>";

//Calculando a Tabuada
for( $cont = 1; $cont <=10; $cont++){
$result = $numero * $cont;
echo "[$numero] * [$cont] = $result <br/>";

}

echo "<br/> <hr>";
//Calculando o Fatorial
$fat = 1;
for( $x = 1; $x <= $fatorial; $x++){

$fat = $fat * $x;

echo "Resultado do  Fatorial = $fat <br/>";


}
?>
<br/>
<br/>
<a href = "tabuada.html"> Voltar </a>

</body>
</html>