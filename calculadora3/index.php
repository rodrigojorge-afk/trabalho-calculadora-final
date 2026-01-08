<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form action="calculate.php" method="post">
        <input type="number" name="num1" placeholder="Número 1" value = "<?php echo isset($_GET['ultimo']) ? $_GET['ultimo'] : ''; ?>"
        required>
        <input type="number" name="num2" placeholder="Número 2" required>
        <select name="operation" required>
            <option value="add">Somar</option>
            <option value="subtract">Subtrair</option>
            <option value="multiply">Multiplicar</option>
            <option value="divide">Dividir</option>
        </select>
        <button type="submit">Calcular</button> 



    </form>
    <?php
    
      if($_POST){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];

        switch($operation){
            case 'add':
                $resultado = $num1 + $num2;
                break;
            case 'subtract':
                $resultado = $num1 - $num2;
                break;
            case 'multiply':
                $resultado = $num1 * $num2;
                break;
            case 'divide':
                
                    $resultado = $num1 / $num2;
                    
                break;
            default:
                $resultado = "inválido";
        }
         echo "<h2>Resultado: $resultado</h2>";
         echo '<a href="?ultimo='.$resultado.'">Continuar a usar a calculadora?</a>';


        }
        ?>
   

</body>
</html>


