<?php
include "config.php";
session_start("logando");
if((session_is_registered("login") AND session_is_registered("senha") AND session_is_registered("id"))){
header("location:index.php?act=a.31&log_sys=$id");
exit;
}
?>
<html>
<head>
<title>hlegius - Criando Solu&ccedil;&otilde;es (bem-vindo)</title>
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

<div id="Layer1" style="position:absolute; left:6px; top:17px; width:95px; height:132px; z-index:1">
  <table width="100" border="0">
    <tr> 
      <td height="19">
<div align="center"><font size="-1" face="Verdana, Arial, Helvetica, sans-serif">Menu</font></div></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href="index.php?act=a.20&log_sys=0">Principal</a></font></td>
      </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href="index.php?act=a.21&log_sys=0">Cadastre-se!</a></font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href="index.php?act=a.23">Login</a></font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Usu&aacute;rios</font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href="index.php?act=8">Contato</a></font></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
    </tr>
  </table>
</div>
<div id="Layer2" style="position:absolute; left:107px; top:19px; width:569px; height:132px; z-index:2"> 
  <p align="center"><strong><font size="-1" face="Verdana, Arial, Helvetica, sans-serif">hlegius 
    - Sistema de Login e senha (Criando Solu&ccedil;&otilde;es)</font></strong></p>
  <p> <font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Caro <strong>visitante</strong>, 
    para utilizar todos os nossos servi&ccedil;os, pedimos que se logue caso cadastrado 
    ou cadastre-se caso n&atilde;o. N&atilde;o leva nem 1 minuto!</font></p>
  <p align="right">&nbsp; </p>
  <div id="Layer5" style="position:absolute; left:-101px; top:131px; width:149px; height:103px; z-index:5"><font size="-2" face="Arial, Helvetica, sans-serif"><strong>&Uacute;ltimo 
    Cadastro<br>
    <br>
    <?php
$last = mysql_query("SELECT * FROM cadastro ORDER BY id DESC LIMIT 0,1") or die("Erro" . mysql_error());
while($ultimo = mysql_fetch_array($last)){
print "Nick: <a href='http://".$ultimo['site']."' title='Home Page de ".$ultimo['login']."' target='_blank'>".$ultimo['login']."</a>";
}?>
    <br>
    bem-vindo ao grupo!</strong></font></div>
  <p align="right"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Atenciosamente,<br>
    <a href="?act=a.89&log_sys=1">hlegius</a></font></p>
  </div>
<div id="Layer3" style="position:absolute; left:302px; top:316px; width:231px; height:26px; z-index:3"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Desenvolvido 
  por: <a href="mailto:hlegius@hotmail.com">hlegius</a></font></div>
</body>
</html>
