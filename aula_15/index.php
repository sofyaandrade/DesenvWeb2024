<?php
    require_once "lib/conexaobd.php";

$conexaoBd = new ConexaoBd();
$conexaoBd->setHost('127.0.0.1');
$conexaoBd->setPorta(5432);
$conexaoBd->setUserName("postgres");
$conexaoBd->setPassword("postgres");
$conexaoBd->setDatabase("postgres");

if(!$conexaoBd-> conectar()){
    echo "falha ao conectar";
}
?> 
