<?php
include "config.php";
$ide		= $_POST['id'];
$nome		= $_POST['name'];
$mail		= $_POST['mail'];
$birth		= $_POST['birth'];
$state		= $_POST['state'];
$hobby		= $_POST['hobby'];
$homepage	= $_POST['homepage'];
$login		= $_POST['login'];
$password	= $_POST['pass'];
$retripe	= $_POST['pass_r'];
if(($nome == "") or ($mail == "") or ($birth =="") or ($login == "") or ($password == "")){
print "<center>Há campos requeridos em branco!</center>";
exit;
}
elseif ($password != $retripe){
print "<center>Os campos de senha não coincidem!</center>";
exit;
}
$confir = mysql_query("SELECT * FROM cadastro WHERE login = '$login' or email = '$mail'");
$confirm = mysql_num_rows($confir);
if($confirm == true){
print "<center>Este login ou/e e-mail já está sendo usado por outro usuário</center>";
exit;
		};
$pattern	= "^([0-9]{2})/([0-9]{2})/([0-9]{4})";
$verifica	= eregi($pattern,$birth);
if($verifica == false){
 print "Sintaxe do campo nascimento inválida!";
 exit;
		}else{
$crialogin	= mysql_query("INSERT INTO cadastro (id,nome,email,nasc,cidade,interesse,site,login,senha,grp) VALUES ('$ide','$name','$mail','$birth','$state','$hobby','$homepage','$login','$password','Membros')") or die ("Erro ao cadastrar o usuário $name" . mysql_error());
	
		session_start("logando");
		session_name();
		session_destroy();
		session_register("login","senha","id");
$ident = $_SESSION['id'];
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
		header("location:index.php?act=a.31&log_sys=$id");
		};
?>