<?php
require_once "../bot.php"

use login\Permissions;

if(isset($_POST['usuario']) && isset($_POST['senha'])){
    $login = new Permissions();
    if($login->login()){
        header("Location: http://localhost/phpAvancado/admin/");
    }else{
        header("Location: http://localhost/phpAvancado/login?msg=erro");
    }
}