<?php
include "config.php";
session_start("logando");
if(!(session_is_registered("login") and session_is_registered("senha") and session_is_registered("id"))){
header("location:index.php?act=a.20");
exit;
}
$data = date("d/m/Y - H:i");
$ip   = $_SERVER['REMOTE_ADDR'];
$get = $_GET['log_sys'];
$login_p = $_POST['login'];
$senha_p = $_POST['senha'];
if($_SESSION['id'] != $_GET['log_sys']){ 
$valor = "O usuário de ID: $id, tentou mudar o log_sys de: $id para $get, e o sistema o bloqueou.";
print "<center>Você não pode mudar o log_sys!</center>"; 
print "<center>Estamos deslogando você, e o administrador foi comunidado sobre a tal atitude!</center>";
mail($email_root, "Acesso não autorizado", $valor, "FROM: sistema@servidor.com.br");
print "<meta http-equiv='refresh' content=3;URL=index.php?act=a.100>";
exit;
}
$bife = mysql_query("SELECT * FROM cadastro WHERE login ='$login_p' and senha='$senha_p' and grp = 'administradores'");
if(mysql_num_rows($bife) ==1){
while($pcadmin = mysql_fetch_array($bife)){
$id  = $pcadmin['id'];
$grp = $pcadmin['grp'];
unset($_SESSION['logando']);
session_destroy();
session_register("login","senha","id","grp");
}
$log = mysql_query("INSERT INTO adlogs (data,ip,login) VALUES ('$data','$ip','$login_p')") or die ("Erro crítico!" . mysql_error());
header("location:index.php?act=pc.1a&log_sys=$get");
	}else
		{ 
			print "<center>Sua tentativa de login foi gravada em log...<br/>Feche esta janela e retorne ao sistema</center>";
	$log = mysql_query("INSERT INTO adlogs (data,ip,login) VALUES ('$data','$ip','$login_p')") or die ("Erro crítico!" . mysql_error());
		};
?>