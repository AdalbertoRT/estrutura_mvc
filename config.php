<?php 
require "environment.php"; 

if (ENVIRONMENT == 'development') {
    define('BASE_URL', 'http://localhost/estrutura_mvc/');
    $config = array(
        'dbname' => 'db_estrutura_mvc',
        'dbhost' => 'localhost',
        'dbuser' => 'root',
        'dbpass' => '',
        'charset' => array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );
    
}else{
    define('BASE_URL', 'http://estrutura_mvc.com.br/');
    $config = array(
        'dbname' => 'db_estrutura_mvc',
        'dbhost' => 'localhost',
        'dbuser' => 'root',
        'dbpass' => '',
        'charset' => array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );
}

global $conn;

try {
    $conn = new PDO('mysql:dbname='.$config['dbname'].';host='.$config['dbhost'], $config['dbuser'], $config['dbpass'], $config['charset']);
} catch (PDOException $e) {
    echo "ERRO: ".$e->getMessage();
}