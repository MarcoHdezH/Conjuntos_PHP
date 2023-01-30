<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h2>Formulario</h2>
    <hr>

    <form action = "conjuntos.php" method="post">
        <label>No. de datos del conjunto "A" </label>
        <input type="number" name="ConjuntoA" required>
        <br><br>
        <label>No. de datos del Conjunto "B"</label>
        <input type="number" name="ConjuntoB" required>
        <br><br>
        <input type="submit" name="enviar" value="Aceptar">
        <input type="reset" name="reset" value="Limpiar">
    </form>
</body>
</html>