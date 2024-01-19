<?php
use pdo\Mysql;
require_once "autoload.php";
$load = new AutoLoad();
$db = new Mysql('localhost', 'entra21', 'root', '');
session_start();