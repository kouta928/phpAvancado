<?php
//cookies são utilizados para armazenar informações entre as requisições do usuário, o servidor envia e o navegador armazenar
//sintaxe criação setcookie(nome, valor, duracao, caminho)

//criando um cookie com uma hora de validade
setcookie('usuario', 'Bruno', time() + 3600, '/');

//ler um cookie
echo $_COOKIE['usuario'];

//remover um cookie
setcookie('usuario', '', time() - 3600, '/');