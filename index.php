<?php
    session_start();
    $msg = "";
    if (isset($_SESSION["msg"])) {
        $msg = $_SESSION["msg"];
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <main>
        <?=$msg?>
        <h1>Login</h1>
        <form action="login.php" method="post">
            <label for="fuser">Usuário</label>
            <input type="text" name="fuser" required><br>
            <label for="fpass">Senha: </label>
            <input type="password" name="fpass" required><br>
            <br>
            <button type="submit">Entrar</button>
        </form>
    </main>
</body>
</html>