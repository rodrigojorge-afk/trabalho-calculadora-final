<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site php</title>
</head>
<body>
    <h1>Site php</h1>
    <form action="tratar.php" method="post" >
    <p>
        <?php
            echo "ola Mundo!";
        ?>  
    </p>
     <input type="text"  name="nome" placehorder="nome" type="post">
     <input type="text"  name="morada" placehorder="morada" type="post">
     <input type="submit"  name="adicionar" placehorder="adicionar" type="post">
    
    </form>
</body>
</html>