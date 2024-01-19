<?php

use login\Permissions;
require_once "../bot.php";

$acesso = new Permissions();
$acesso->isLogged();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Restrita</title>
</head>
<body>
    <h1>Bem vindo a área restrita</h1>
</body>
</html>