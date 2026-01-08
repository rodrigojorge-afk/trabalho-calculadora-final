<?php
session_start();
$_SESSION['tarefas'] = $_SESSION['tarefas'] ?? [];


if (($t = $_POST['tarefa'] ?? null) && !in_array($t, $_SESSION['tarefas'])) {
    $_SESSION['tarefas'][] = $t;
}

if (isset($_POST['remover'])) {
    $r = $_POST['remover'];
    unset($_SESSION['tarefas'][$r]);
    $_SESSION['tarefas'] = array_values($_SESSION['tarefas']);
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<title>Lista de Tarefas</title>
</head>
<body>

<h1>Lista de Tarefas</h1>


<form method="post">
    <input type="text" name="tarefa" placeholder="Digite uma tarefa" required>
    <button type="submit">Adicionar</button>
</form>

<h2>Tarefas:</h2>
 
<ul>
<?php foreach ($_SESSION['tarefas'] as $i => $t): ?>
    <li>
        <?= $t ?>
     
        <form method="post" style="display:inline;">
            <button type="submit" name="remover" value="<?= $i ?>">Remover</button>
        </form>
    </li>
<?php endforeach; ?>
</ul>

<p>Total de tarefas: <?= count($_SESSION['tarefas']) ?></p>

</body>
</html>

