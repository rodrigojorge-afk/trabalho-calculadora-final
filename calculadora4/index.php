<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial</title>
</head>
<body>
    <h1>Calculadora de Fatorial</h1>

    <form action="resultado.php" method="post">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Calcular Fatorial</button>
    </form>

</body>
</html>

 <?php
function fatorial($n) {
    $resultado = 1;
    for ($i = $n; $i >= 1; $i--) {
        $resultado *= $i;
    }
    return $resultado;
}

$numero = $_POST['numero'];
$resultado = fatorial($numero);

echo "<h1>Resultado</h1>";
echo "<p>O fatorial de $numero é <strong>$resultado</strong></p>";
?>
