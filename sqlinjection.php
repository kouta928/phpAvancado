<?php
// COMANDOS SQL INJECTION
// ' OR '1=1 --
// " OR " 1=1 --
//inurl"login.php"

// if(isset($_POST['usuario'])){
//     $pdo = new PDO('mysql:host=localhost;dbname=entra21', 'root', '');
    
//     //proteção SQL INJECTION PITORESCA
//     $usuario = preg_replace('/[^a-zA-Z0-9]/', '', $_POST['usuario']);
//     $senha = preg_replace('/[^a-zA-Z0-9]/', '', $_POST['senha']);

//     $login = $pdo->prepare("SELECT * FROM seg_usuarios WHERE user = '{$usuario}' AND password = '{$senha}'");

//     $login->execute();
//     $resultado = $login->fetchAll(PDO::FETCH_ASSOC);
    
//     echo "<pre>";
//     var_dump($resultado);
//     echo "</pre>";  
// }

if(isset($_POST['usuario'])){
    $pdo = new PDO('mysql:host=localhost;dbname=entra21', 'root', '');
    
    //proteção SQL INJECTION mió
    $login = $pdo->prepare("SELECT * FROM seg_usuarios WHERE user = :usuario AND password = :senha");
    $login->bindValue(':usuario', $_POST['usuario']);
    $login->bindValue(':senha', $_POST['senha']);
    $login->execute();
    $resultado = $login->fetchAll(PDO::FETCH_ASSOC);
    
    echo "<pre>";
    var_dump($resultado);
    echo "</pre>";  
}

