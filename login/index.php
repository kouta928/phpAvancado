<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="logar.php" method="POST">
    <input type="text" name="usuario" placeholder="Usuário">
    <input type="password" name="senha" placeholder="Senha">
    <button type="submit">Login</button>
    </form>
    <?php
    $msg = (isset($_GET['msg'])) ? $_GET['msg'] : '';
    echo "<p>{$msg}";
    ?>
</body>
</html>