<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>1) Mostrar los numeros del 1 al 100</h1>

<?php 
$i = 1 ;
while ( $i <= 100) {
    echo "$i";
    $i++;
}
?>
<hr>

<h1>2)Mostrar los numeros del 100 al 1</h1>

<?php 

$i = 100 ;
while ( $i > 0 ) {
    echo "$i" ;
    $i--; 
}
?>
<hr>

<h1>3) Mostrar los numeros pares del 1 al 100</h1>

<?php 


for ($i = 2 ; $i <= 100 ; $i++) {
    if ($i % 2 == 0) {
        echo $i;
    }
}
?>
<hr>

<h1>4) Mostrar los numeros impares del 1 al 100</h1>

<?php

for ( $i = 1 ; $i <=100 ; $i++ ){
     
      if ($i % 2  != 0 ) 
        echo $i ; 

    }   
?>
<hr>

<h1>5) Mostrar la suma de los numeros de 1 al 20</h1>

<?php 

$n = 0 ;
for ($i = 1 ; $i <= 20  ; $i++) {
  
   $n += $i ; 
   
}

echo $n ; 

?>
<hr>

<h1>6) Mostrar la suma de números pares de 1 a 20.</h1>

<?php 
$n = 0 ;
for ( $i = 2 ; $i <= 20 ; $i++) {
    if ($i % 2 == 0) {
        $n= $n + $i  ;
        
    }
}
echo $n; 
?>

</body>
</html>