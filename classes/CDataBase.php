<?php

session_start();

class CDataBase{
    private $mysql;
    private $server = 'localhost';
    private $login = 'root';
    private $pass = '';
    private $db = 'db_test';

    public function __construct()
    {
        $this->mysql = new mysqli($this->server, $this->login, $this->pass, $this->db);
    }

    public function selectAll($tableName){
        $obj = $this->mysql->query('SELECT * FROM '.$tableName);

        while($row = $obj->fetch_assoc()){
            $result[] = $row;
        }
        return $result;
    }

    public function delById($tableName, $id){
        $this->mysql->query("DELETE FROM `$tableName` WHERE `id` = '$id'");
    }

    public function addTOBDLinks($tableName, $link, $author_name, $comment){
        $this->mysql->query("INSERT INTO `$tableName` (`id`, `link`, `author_name`, `comment`) VALUES (NULL, '$link', '$author_name', '$comment')");
    }

    public function Upd($tableName, $author_name, $link, $id, $com){
        $this->mysql->query("UPDATE `$tableName` SET `link` = '$link', `comment` = '$com' WHERE `author_name` = '$author_name' AND `id` = '$id'");
    }
}

$CDataBase = new CDataBase();