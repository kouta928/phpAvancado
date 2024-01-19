<?php
//semelhante aos cookies as sessoes sao utilizadas para armazenar informacoes, porem ficam salvas no servidor
//sem´re devo ativar o gerenciador de cessoes para poder usar sessions com serrion_start()

session_start();

//definindo uma sessao
$_session['usuario'] = 'Diego';

//ler uma sessao
echo $_SESSION['usuario'];

//destruindo uma sessao
unset($_SESSION['usuario']);

//destruindo todas as sessoes
session_destroy();

//Em PHP, a validade de uma sessão é controlada por meio da configuração do tempo de expiração da sessão. O tempo de expiração da sessão pode ser ajustado por meio da configuração do parâmetro session.gc_maxlifetime no arquivo de configuração do PHP (php.ini) ou por meio de código no script PHP.
//A função session_set_cookies_params() também pode ser usada para configurar o tempo de expiração da sessão.

session_set_cookie_params(43200);