<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio Aleatório</title>
</head>
<body>

    <h1>Sorteio aleatório entre 10 e 20</h1>

    <form method="post">
        <label>Escolhe um número entre 10 e 20:</label>
        <input type="number" name="numero" min="10" max="20" required>
        <button type="submit">Sortear</button>
    </form>

    <?php

    function sortearAte($numeroEscolhido) {
        $lista = [];

        do {
            $sorteado = rand(10, 20);
            $lista[] = $sorteado;
        } while ($sorteado != $numeroEscolhido);

        return $lista;
    }

    
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $numeroEscolhido = $_POST["numero"];
        $sorteios = sortearAte($numeroEscolhido);
        $total = count($sorteios);

        echo "<h2>Resultados:</h2>";
        echo "<p><strong>Números sorteados:</strong></p>";

        foreach ($sorteios as $s) {
            echo $s . " ";
        }

        echo "<p><strong>Total de sorteios: $total</strong></p>";
    }

    ?>

</body>
</html>
