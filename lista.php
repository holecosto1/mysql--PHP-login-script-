<?php
include "config.php";

$get = $_GET['log_sys'];
$verifica = mysql_query("SELECT * FROM cadastro WHERE id = '$get'");
if(mysql_num_rows($verifica) > 0){
while($dados = mysql_fetch_array($verifica))
$id	= $dados['id'] and
$nome = $dados['nome'] and
$email = $dados['email'] and
$nasc = $dados['nasc'] and
$interesse = $dados['interesse'] and
$site = $dados['site'] and
$login = $dados['login'] and
$senha = $dados['senha'] and
$grp = $dados['grp'];
}
else
{

};
?>