<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Ejercicio 1</h1>

    <?php 
    
    $n = 1;
   
    if ($n > 0) {
        echo "es un numero positivo"; 
    }else{
        echo"no es un numero positivo";
    }
    
    ?>
    <hr>

    <h1>Ejercicio 2</h1>

    <?php 
    
    $n = 2;

    if ($n > 1 and $n < 10){
        echo "son numeros entre el 2 y el 9";
    }

    ?>
    <hr>

    <h1>Ejercicio 3</h1>    
    <?php 
    
        $n = 11 ;

        if ($n > 10 || $n <2){
        
        echo "cumple alguna de las dos condiciones";
        echo $n ;
        } else {
        echo "no cumple ninguna condicion";
        }
    
    
    ?>
    <hr>

    <h1>Ejercicio 4</h1>
    <h2>Suma</h2>
    <?php
    
    $numero1 = 20 ;
    $numero2 = 10 ;
    
    if ($numero1 > $numero2){
        echo $numero1 + $numero2 ;
        
    }
    ?>
    <h1>Resta</h1>
    <?php
    
    $numero1 = 20 ;
    $numero2 = 10 ;
    
     if ($numero1 > $numero2){
        echo $numero1 - $numero2 ;
        
    }
    ?>

    <hr>

    <h1>Multiplicacion</h1>
    <?php
    
    $numero1 = 10 ;
    $numero2 = 20 ;
   
    if ($numero2 > $numero1){

            echo $numero2 * $numero1 ;
        } 

        ?>
        <hr> 

    <h1>Division Entera</h1>
   <?php  

     $numero1 = 10 ;
     $numero2 = 20 ;
        if ($numero2 > $numero1){

            echo $numero2 / $numero1 ;
        }
  ?>  
    <hr>
    <h1>Resto de la Division</h1>
   <?php 
   
   $numero1 = 10 ;
   $numero2 = 20 ;
    
   if ($numero2 > $numero1){

    echo $numero2 & $numero1 ;
   
    }
   
    ?>

    <h1>Numeros Iguales</h1>

    <?php 
    $numero1 = 10 ;
    $numero2 = 10 ;

    if ( $numero1 and $numero2){
    echo "los numero son iguales";
    }
    ?>
    <hr>

    
   

</body>
</html>