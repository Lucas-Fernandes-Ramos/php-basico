
<html>
<head>  <title> Curso PHP </title>
<meta charset="UTF-8"/>
<?php
$text = isset($_GET["t"])?   $_GET["t"]:"Texto Generico";
$tam  = isset($_GET["tam"])? $_GET["tam"]:"12pt";
$cor  = isset($_GET["cor"])?  $_GET["cor"]:"#000000";

?>
<style>
span.texto{
 font-size: <?php echo $tam; ?>;
 color:     <?php echo $cor; ?>;

}



 </style>

</head>
<body>

<?php
 echo "<span class='texto'> $text</span>";
 

?>



<br/>
<a href = "aula02.php"> Voltar </a>

</body>
</html>