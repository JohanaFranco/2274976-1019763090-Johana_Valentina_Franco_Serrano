<html>
    <head>
    </head>
    <body>
       <h1> Hola soy un titulo</h1>
       <?php
       // INICIA CODIGO PHP
       // Esto es un comentario
            /*"todo lo que este aqui dentro 
            se considera un comentario
            */
            // COMANDO HECHO DEVUELVE UN VALOR

            echo"Hola esto es un comentario";
            echo "<br>";       //salto de linea
            echo 3+3;         /* realiza una operacion en php
                              que no se puede en html. */

       // TERMINA PHP
       ?>
    </body>
</head>


<?php
// definimos una variable con un texto
$niVariable = "Hola variable";
// visualizamos la variable en el explorador
echo $niVariable;
// otro ejemplo variable niValor igual a 2
echo "<br>";
$niValor = 2;
// visualizamos sin enbargo realizamos una multiplicacion * 3
echo 3*$niValor;