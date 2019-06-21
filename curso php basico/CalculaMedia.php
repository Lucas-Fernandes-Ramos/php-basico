<html>
<head>  <title> Curso PHP </title>
<meta charset="UTF-8"/>
</head>
<body>

<?php

$nota1 = isset($_GET["nota1"])? $_GET["nota1"]:"Informe a nota 1!!!";
$nota2 = isset($_GET["nota2"])? $_GET["nota2"]:"Informe a nota 2!!!";

//calculando a media aritmetica entre as variaveis
$mediaAritmetica = ($nota1+$nota2)/2;  // <== formula
echo "<hr>";
echo "Voce informou para a primeira nota1 o valor = $nota1 <br>";
echo "Voce informou para a segunda  nota2 o valor = $nota2 <br>";
echo "Voce obteve media  = $mediaAritmetica <br>";

if($mediaAritmetica >=0 && $mediaAritmetica <=5){
 $passou = "<font color='red'>FOI REPROVADO SEM CHORO </font>";

}elseif($mediaAritmetica >5 && $mediaAritmetica <=10){
 $passou ="<font color='green'>FOI APROVADO </font>";

}

echo "Resultado Final <br> <br> <hr>";
echo "Voce obteve media = $mediaAritmetica e voce $passou";
echo "<br> <hr>";
?>
<a href="media.html"> Voltar </a>
</body>
</html>