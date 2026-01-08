<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Jogo de Futebol</title>
</head>
<link rel="stylesheet" href="stilo.css">
<body>

<h1>Simulação de Jogo de Futebol</h1>

<form method="post">

    <h3>Equipa A</h3>
    Técnica (1 a 10):
    <input type="number" name="tecA" min="1" max="10" required><br>
    Preparação (1 a 10):
    <input type="number" name="prepA" min="1" max="10" required><br>
    Condição preferida:
    <select name="condA" required>
        <option value="chuva">Chuva</option>
        <option value="moderado">Moderado</option>
        <option value="sol">Sol</option>
    </select><br><br>

    <h3>Equipa B</h3>
    Técnica (1 a 10):
    <input type="number" name="tecB" min="1" max="10" required><br>
    Preparação (1 a 10):
    <input type="number" name="prepB" min="1" max="10" required><br>
    Condição preferida:
    <select name="condB" required>
        <option value="chuva">Chuva</option>
        <option value="moderado">Moderado</option>
        <option value="sol">Sol</option>
    </select><br><br>

    <button type="submit">Iniciar Jogo</button>
</form>

<?php
if ($_POST) {

    $relato = "";

    
    $climas = ["chuva", "moderado", "sol"];
    $clima = $climas[array_rand($climas)];
    $relato .= "Condições do jogo: <b>$clima</b><br>";

    $posse = rand(0,1) == 0 ? "A" : "B";
    $relato .= "A Equipa $posse começa com a bola.<br><br>";

    $golosA = 0;
    $golosB = 0;

   
    for ($i = 1; $i <= 8; $i++) {

        if ($posse == "A") {

            $relato .= "Jogada $i: Equipa A ataca... ";
            if (rand(0,1)) {
                $golosA++;
                $relato .= "<b>GOLO!</b><br>";
            } else {
                $relato .= "defesa da Equipa B.<br>";
                $posse = "B";
            }

        } else {

            $relato .= "Jogada $i: Equipa B ataca... ";
            if (rand(0,1)) {
                $golosB++;
                $relato .= "<b>GOLO!</b><br>";
            } else {
                $relato .= "defesa da Equipa A.<br>";
                $posse = "A";
            }
        }

        
        if (rand(1,6) == 1) {
            if ($posse == "A") {
                $relato .= "<b>Falta! Penálti para a Equipa A!</b> ";
                if (rand(0,1)) {
                    $golosA++;
                    $relato .= "<b>GOLO de penálti!</b><br>";
                } else {
                    $relato .= "defendido pelo guarda-redes!<br>";
                }
            } else {
                $relato .= "<b>Falta! Penálti para a Equipa B!</b> ";
                if (rand(0,1)) {
                    $golosB++;
                    $relato .= "<b>GOLO de penálti!</b><br>";
                } else {
                    $relato .= "defendido pelo guarda-redes!<br>";
                }
            }
        }

        $relato .= "<br>";
    }


    echo "<hr><h2>Relato do Jogo</h2>";
    echo $relato;

    echo "<hr><h2>Resultado Final</h2>";
    echo "Equipa A $golosA - $golosB Equipa B<br>";

    if ($golosA > $golosB) {
        echo "<h2>Equipa A venceu o jogo</h2>";
    } elseif ($golosB > $golosA) {
        echo "<h2>Equipa B venceu o jogo</h2>";
    } else {
        echo "<h2>Empate</h2>";
    }
}
?>

</body>
</html> 



