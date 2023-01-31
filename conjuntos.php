<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conjuntos xd</title>
</head>

<body>
    <h1 style="text-align: center;">Operaciones con Conjuntos</h1>

    <?php

    require("conjunto.php");

    $tamaño1 = $_REQUEST['ConjuntoA'];
    $tamaño2 = $_REQUEST['ConjuntoB'];

    $C1 = new conjunto($tamaño1);

    $C1->mostrar("Conjunto 1 = Tamaño de $tamaño1",$tamaño1);

    $C2 = new conjunto($tamaño2);

    $C2->mostrar("Conjunto 2 = Tamaño de $tamaño2",$tamaño2);
    echo "<br>";

    // Probando Eliminar Repetidos y Ordenar Por Burbuja
    //Conjunto1
    $tamaño1=$C1->Repetidos($C1);
    //$C1->mostrar("Sin Repetidos Conjunto 1 y Ordenado",$tamaño1);

    //Conjunto 2
    $tamaño2=$C2->Repetidos($C2);
    //$C2->mostrar("Sin Repetidos Conjunto 2 y Ordenado",$tamaño2);

    $C1->Sumar($C1,$C2);

    echo "<br>";

    //$C1->Interseccion($C1,$C2);
    $C1->Interseccion($C2);

    //$C1->Diferencia($C1,$C2,1);
    $C1->Diferencia($C2,1);

    $C2->Diferencia($C1,2);
    ?>

</body>

</html>