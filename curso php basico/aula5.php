<html>
<head>  <title> Curso PHP </title>
<meta charset="UTF-8"/>
</head>
<body>

<?php

$a = isset($_GET["ano"])? $_GET["ano"]:"Informe o Ano amiguinho!!!";
$i = date("Y")  - $a;

echo "Voce nasceu em $a e tem $i anos. <br/>";

if($i < 16){
   $tipoVoto = "nao vota";
}else{
      if(($i >=16 && $i < 18) || ($i >65)){
      $tipoVoto = "Voto opcional";
}else{
$tipoVoto = "Voto Obrigatorio:";

}
}
echo "Para essa idade, $tipoVoto";
/*
if($i >=18){
   $v = "ja pode votar";
   $d = "ja pode dirigir";

}else{
      $v = "nao pode votar";
	  $d = "nao pode dirigir";
     }
echo "Com essa idade voce $v e tambem $d <br/>";
*/
?>

</body>
</html>