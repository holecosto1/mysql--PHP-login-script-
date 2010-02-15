<?php
include "config.php";
$get = $_GET['log_sys'];
$nome		= $_POST['nome'];
$email		= $_POST['email'];
$interesse	= $_POST['interesses'];
$site		= $_POST['site'];
$niver		= $_POST['niver'];
$login_s	= $_POST['login_s'];
$senha_s	= $_POST['senha'];
$grupo		= $_POST['grupo'];
// Verificações básicas...
$pattern = "^([0-9]{2})/([0-9]{2})/([0-9]{4})";
$vr_niver = ereg($pattern, $niver);
if(($nome == NULL) or ($email == NULL) or ($login_s == NULL) or ($senha_s == NULL) or ($grupo == NULL) or ($niver == NULL)){
print "Há campos requeridos em branco!";
exit;
}
if($vr_niver == false){ print "A sintaxe do nascimento não é valida"; exit;}
$mysql_md = mysql_query("UPDATE cadastro SET nome = '".$nome."', email = '".$email."', interesse = '".$interesse."', site = '".$site."', login = '".$login_s."', senha = '".$senha."', grp = '".$grupo."', nasc = '".$niver."' WHERE login = '".$login_s."'") or die ("Erro" .mysql_error());
if(mysql_md == true){
print "<center>Dados alterados com sucesso!</center>";
print "<meta http-equiv='refresh' content='3;URL=index.php?act=pc.1a&log_sys=$get'>";
}else{
print "Erro, os dados não foram alterados..";
};
//titulo da página
print "<title>Aguarde...</title>";
?>