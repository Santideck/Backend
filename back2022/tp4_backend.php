
<h1>1. Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro.
</h1>

<?php

$numero = array("2","4","6","8","10","12","14","16","18","20",);

print"<pre>\n";
print_r ($numero);
print"</pre>\n";
?>
<br>

<h1>2. Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la
matriz. Mostrar el esquema del array con print_r().</h1>

<?php 

$numeros = ["Pedro", "Ana", "34" , "1" ];
        print_r($numeros);
    
//  foreach($numeros as $numero){
//         print"<p>$numero</p>";
//     }
?>
<br>

<h1>3. Crear un array asociativo e introducir los siguientes valores:</h1>
<?php 

$datos = [
    'Nombre' => "Pedro",
    'Apellido' => "Torres",
    'Direccion' => " Av. Mayor 3703",
    'Telefono' => 1122334455,
];
    print_r($datos);
?>
<br>

<h1>4. Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y
Chicago, sin asignar índices al array. A continuación, muestra el contenido del array.
Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid.</h1>

<?php 

$ciudades = ["Madrid","Barcelona","Londres","New York","Los Angeles","Chicago",];

$i = 0 ;

foreach ($ciudades as $valor){
     
 print "la ciudad con indice $i es $valor <br>" ; 
 $i += 1;
}
   
?>
<br>

<h1>5. Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona,
LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago.
Ejemplo: El índice de Madrid es MD.</h1>

<?php 

$ciudades = [

    'MD' => "Madrid",
    'BCL' => "Barcelona",
    'LD' => "Londres",
    'NY' => "Nueva York",
    'LA' => "Los Angeles",
    'CCG' => "Chicago",
];

print_r ($ciudades);

?>












