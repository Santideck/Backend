<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>1) Hola Mundo</h1>

<?php 

    echo "hola mundo " ; 

?>
<hr>

<h1>2) Cadena de caracteres</h1>

<?php 

$saludo="Hola Mundo";
echo $saludo;

?>
<hr>

<h1>3) SUMA</h1>

<?php 

$numero1=33;
$numero2=24;
echo $numero1 + $numero2;


?>
<hr>
<h1>3) RESTA</h1>

<?php 

$numero1=33;
$numero2=24;
echo $numero1 - $numero2;

?>
<hr>
<h1>3) DIVISION</h1>

<?php 

$numero1=33;
$numero2=24;
echo $numero1 / $numero2;

?>
<hr>
<h1>3) MULTIPLICACION</h1>

<?php 

$numero1=33;
$numero2=24;
echo $numero1 * $numero2;

?>
<hr>
<h1>3) RESTO</h1>

<?php 

$numero1=33;
$numero2=24;
echo $numero1 % $numero2;

?>
<hr>

<h1>4) Transformación de grados Celsius a Fahrenhei,</h1>

<?php 

$celsius=20;
$numero2=1.8;
$numero3=32;
echo $celsius * $numero2 + $numero3;

?>
<br>

<h1>5) Implementar Algoritmos (Perimetro Rectángulo)</h1>

<?php 

$base = 18 ;
$altura = 12 ;
echo 2 * ($base + $altura) ;

?>
<hr>

<h1>5) Implementar Algoritmos (Area Rectángulo)</h1>

<?php 

$base = 18 ;
$altura = 12 ;
echo $base * $altura ;

?>
<hr>

<h1>5) Implementar Algoritmos (Perimetro Circulo)</h1>

<?php 

const pi = 3.14 ;
$radio = 30 ;
$perimetro = 2 * pi * $radio ; 
echo $perimetro;

?>
<hr>

<h1> 5) Implementar Algoritmos (Area Circulo)</h1>

<?php 

const pi1 = 3.14 ;
$radio = 30;
$area = pi1 * $radio **2 ;
echo $area;

?>
</body>
</html>