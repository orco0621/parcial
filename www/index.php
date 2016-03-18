<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>MiAplicacion</title>
<link href="jquery-mobile/jquery.mobile.theme-1.3.0.min.css" rel="stylesheet" type="text/css">
<link href="jquery-mobile/jquery.mobile.structure-1.3.0.min.css" rel="stylesheet" type="text/css">
<script src="jquery-mobile/jquery-1.11.1.min.js"></script>
<script src="jquery-mobile/jquery.mobile-1.3.0.min.js"></script>
</head>

<body>
<div data-role="page" id="page">
  <div data-role="header">
    <h1>ORLANDO ANDRES <br> CORREA DURAN</h1>
  </div>
  <div data-role="content">
    <a href="#pagina1" data-role="button">INGRESAR</a>
  </div>
  <div data-role="footer">
    <h4>"UNITROPICO"</h4>
  </div>
</div>
<div data-role="page" id="pagina1">
  <div data-role="header">
    <h1>ORLANDO ANDRES<br> CORREA DURAN</h1>
  </div>
  <Font color=red>Ingresa las 2 cifras a calcular:</Font><br>
<form action="index.php" method=post>
<input type="text" name="cifra1" size="10" maxlength="10"><br>
<input type="text" name="cifra2" size="10" maxlength="10"><br>
<input type=submit name="sumar" value="Sumar">
<input type=submit name="restar"value="Restar">
<input type=submit name="dividir" value="Dividir">
<input type=submit name="multiplicar" value="Multiplicar">
</form>
<div data-role="footer">
    <h4>"UNITROPICO"</h4>
  </div>
</div>
</div>

</body>
</html>
<?php 
if($cifra1==0)
{
echo "ERROR 01: No ingreso la primer cifra.<br>";
}
if($cifra2==0)
{
echo "ERROR 02: No ingreso la segunda cifra.";
}
else
{
echo "Resultado de la operación:<br>";
$resultadodivision=$cifra1/$cifra2;
$resultadomultiplicacion=$cifra1*$cifra2;
$resultadoresta=$cifra1-$cifra2;
$resultadosuma=$cifra1+$cifra2;
if($sumar)
echo $resultadosuma;
if($restar)
echo $resultadoresta;
if($multiplicar)
echo $resultadomultiplicacion;
if($dividir)
echo $resultadodivision;
}

?>