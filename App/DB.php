<?php


namespace App;


class DB
{

    protected $dbh;

    public function __construct()
    {
        $this->dbh = new \PDO('mysql:127.0.0.1; dbname=test','root','507020');
    }

    public function exec($sql)
    {

    }


}?>