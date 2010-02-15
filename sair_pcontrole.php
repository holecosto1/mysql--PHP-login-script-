<?php
include "config.php";
$get = $_GET['del'];
$lis = mysql_query("SELECT * FROM cadastro WHERE id = '$get'");
$listaa = mysql_num_rows($lis);
while($login = mysql_fetch_array($lis)){
$login = $login['login'];
$senha = $login['senha'];
$id    = $login['id'];
}
session_start("logando");
unset($_SESSION['logando']);
session_destroy();
session_register("login","senha","id");
if($get != NULL){
print "<meta http-equiv=refresh content=4;URL=index.php?act=a.65&log_sys=$id;>";
}else{
print "<meta http-equiv=refresh content=4;URL=index.php?act=a.31&log_sys=$id>";
};
?>
<html>
<head>
<title>Aguarde...</title>
</head>

<body>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p align="center"><br>
</p>
<p align="center"><font size="-1" face="Verdana, Arial, Helvetica, sans-serif">Voc&ecirc; 
  foi deslogado com sucesso somente do painel de controle<br>
  aguarde, enquanto redirecionamos voc&ecirc;...</font></p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Desenvolvido 
  por: <a href="mailto:hlegius@hotmail.com">hlegius</a></font><br>
</p>
</body>
</html>
