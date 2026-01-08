<?php
 $nome = $_POST['nome'];
 $morada = $_POST['morada'];    
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> <?php echo $nome?> residente em <?php echo $morada ?> </p>
    <?php
     echo "<P>Olá $nome, residente em $morada </P>";
    ?>
   

</body>
</html>