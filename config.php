<?php
ob_start();
// informações sobre sua conta no servidor
$server		= "localhost";
$user_s		= "hlegius";
$senha_s	= "987654";
$sys_base	= "mysqlsys";
$email_root = "hlegius@hotmail.com";
// Conexão com o mysql
$conect = mysql_connect($server, $user_s, $senha_s) or  die ("Falha ao conectar verifique dados");
mysql_query("CREATE database if not exists $sys_base");
mysql_select_db($sys_base);
?>