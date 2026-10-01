<?php
session_start();
if (!isset($_SESSION["user"])) {
    $_SESSION["msg"] = "<span class='warming'>Faça login para acessar</span>";
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel usuário</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <main id="painel">
        <header>
            <?= $_SESSION["user"] ?> | 
            <a href="sair.php">SAIR</a>
        </header>
        <h1>Painel Usuário</h1>
        <br>
        <p>Olá <strong><?= $_SESSION["user"] ?></strong>!.</p>
        <p>Esse é seu painel personalizado de soluções.</p>
    </main>
</body>

</html>