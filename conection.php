<?php
/*$host="localhost";
$user="root";
$pass="";
$banco="cadastro";
$conexao= mysql_conect($host,$user,$pass) or die (mysql_error())
*/
$dbHost = 'LocalHost';
$dbUsername = 'root';
$dbPassword = 'Londrina33'
$dbName = 'cadastro_npi'

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);