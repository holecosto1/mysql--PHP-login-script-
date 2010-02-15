<?php
include "config.php";

$id		= $_POST['id'];
$login	= $_POST['login'];
$senha	= $_POST['senha'];

if(($login == "") or ($senha == "")){
print "algum campo encontra-se em branco!";
}else{
$mysql	= mysql_query("SELECT id,login,senha FROM cadastro WHERE login = '$login' and senha = '$senha'");
$run	= mysql_num_rows($mysql);
if($run == false){
		print "<center>login ou senha inválidos</center>";
		}else{
		$verifica = mysql_query("SELECT * FROM cadastro WHERE login = '$login'");
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
		session_start("logando");
		session_name();
		session_destroy();
		session_register("login","senha","id");
		header("location:index.php?act=a.31&log_sys=$id");
	};
	};
?>