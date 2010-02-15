<?php
include "config.php";
$get = $_POST['id'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$nasc = $_POST['nasc'];
$interesse = $_POST['interesse'];
$site	= $_POST['site'];
$login	= $_POST['login'];

if(($senha == "") or ($email == "")){
print "Você não pode deixar os campos requeridos em branco";
exit;
}elseif(!(strstr($email, "@"))){
print "Insira um e-mail válido!!!";
exit;
}else{
$jeremias = mysql_query("UPDATE cadastro SET email='" .$email. "',interesse= '" .$interesse. "',site= '" .$site. "', senha = '".$senha."' WHERE id ='" .$get. "' ") or die ("Erro" . mysql_error());
?>
<html>
<title>Aguarde...</title>
<head>
<meta http-equiv='refresh' content='3;URL=index.php?act=c.17&log_sys=<?php print  $get; ?>'>
</head>
<body><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><center>
  <font size="-1" face="Verdana, Arial, Helvetica, sans-serif">Dados alterados com sucesso!<br />
  Aguarde, estamos atualizando seus dados...</font></font>
</center></body>
</html>
<?php
};
?>