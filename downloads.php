<?php
include "config.php";
session_start("logando");
if(!(session_is_registered("login") and session_is_registered("senha") and session_is_registered("id"))){
header("location:index.php?act=a.20&session=0");
exit;
}
$get = $_GET['log_sys'];
if($_SESSION['id'] != $_GET['log_sys']){ 
$valor = "O usuário de ID: $id, tentou mudar o log_sys de: $id para $get, e o sistema o bloqueou.";
mail($email_root, "Acesso não autorizado", $valor, "FROM: sistema@servidor.com.br");
print "<center>Você não pode mudar o log_sys!</center>"; 
print "<center>Estamos deslogando você, e o administrador foi comunidado sobre a tal atitude!</center>";
print "<meta http-equiv='refresh' content=3;URL=index.php?act=a.100>";
exit;
}
$mysql = mysql_query("SELECT * FROM cadastro WHERE id = '$get'");
$corre = mysql_num_rows($mysql);
while($dados = mysql_fetch_array($mysql)){
$id = $dados['id'];
$grp = $dados['grp'];
$nome = $dados['nome'];
$login = $dados['login'];
}
if($grp == "administradores"){
$pcadmin = "<a href='index.php?act=a.65&log_sys=$id' target='_blank' title='Monitore usuários e mais...'>PControle</a>";
}
?>

<html>
<head>
<title>hlegius Criando Solu&ccedil;&otilde;es ( Downloads )</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>
</head>

<body>
<div id="Layer1" style="position:absolute; left:7px; top:23px; width:81px; height:133px; z-index:1">
  <table width="100" border="0">
    <tr> 
      <td><div align="center"><font size="-1" face="Verdana, Arial, Helvetica, sans-serif">Menu</font></div></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href="index.php?act=a.31&log_sys=<?php print  $id; ?>">Home</a></font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href="index.php?act=c.17&log_sys=<?print $id; ?>">Modificar 
        dados</a></font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">usu&aacute;rios</font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href="index.php?act=a.100">Sair</a></font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><?php print  $pcadmin; ?></font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">&nbsp;</font></td>
    </tr>
  </table>
</div>
<div align="center"> 
  <p><strong><font size="-1" face="Verdana, Arial, Helvetica, sans-serif">Aqui 
    ficaria a parte de downloads para membros logados<br>
    <br>
    </font></strong></p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Desenvolvido 
    por: <a href="mailto:hlegius@hotmail.com">hlegius</a></font></p>
</div>
</body>
</html>
