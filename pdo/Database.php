<?php
namespace pdo;
abstract class Database{
    abstract protected function connect();

    abstract public function select();
    abstract public function insert();
    abstract public function update();
    abstract public function delete();
}