<?php
require __DIR__.'/autoload.php';
$db= new \App\DB();


$res=$db->exec('CREATE TABLE testt (id SERIAL)');
var_dump($res);
?>