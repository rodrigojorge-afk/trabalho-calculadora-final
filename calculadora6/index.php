<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Orçamento Janelas</title>
</head>
<body>

<h1>Janelas</h1>

<form method="post">
    Largura (metros): <input type="number" step="0.01" name="largura" required><br><br>
    Altura (metros): <input type="number" step="0.01" name="altura" required><br><br>

    Material:
    <select name="material">
        <option value="madeira">Madeira</option>
        <option value="aluminio">Alumínio</option>
        <option value="pvc">PVC</option>
    </select><br><br>

    Vidro:
    <select name="vidro">
        <option value="simples">Simples</option>
        <option value="duplo">Duplo</option>
    </select><br><br>

    Montagem:
    <input type="checkbox" name="montagem"> Sim<br><br>

    Distância de entrega (km):
    <input type="number" name="km" value="0"><br><br>

    <button type="submit">Calcular Orçamento</button>
</form>

<?php
if ($_POST) {

    $largura = $_POST['largura'];
    $altura = $_POST['altura'];
    $material = $_POST['material'];
    $vidro = $_POST['vidro'];
    $montagem = isset($_POST['montagem']);
    $km = $_POST['km'];

    // validar medidas
    if ($largura < 0.5 || $largura > 3 || $altura < 0.3 || $altura > 2) {
        echo "<p>Medidas inválidas.</p>";
        exit;
    }


    $perimetro = 2 * ($largura + $altura);
    $area = $largura * $altura;


    if ($material == "madeira") $precoMaterial = 30;
    if ($material == "aluminio") $precoMaterial = 40;
    if ($material == "pvc") $precoMaterial = 50;

    
    if ($vidro == "simples") $precoVidro = 20;
    if ($vidro == "duplo") $precoVidro = 30;

    $total = 0;
    $total += $perimetro * $precoMaterial;
    $total += $area * $precoVidro;

    if ($montagem) {
        $total += 25;
    }

    $total += $km * 5;

    // IVA
    $totalComIVA = $total * 1.23;

    echo "<h2>Orçamento Final</h2>";
    echo "Total sem IVA: " . number_format($total, 2) . " €<br>";
    echo "Total com IVA (23%): " . number_format($totalComIVA, 2) . " €";
}
?>

</body>
</html>