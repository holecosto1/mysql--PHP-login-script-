<?php
session_start("logando");
if(!(session_is_registered("login") and session_is_registered("senha") and session_is_registered("id"))){
header("location:index.php?act=a.20");
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
if((session_is_registered("login") and session_is_registered("senha") and session_is_registered("id") and session_is_registered("grp"))){
header("location:index.php?act=pc.1a&log_sys=$get");
exit;
}
?>


<html>
<head>
<title>Painel de Controle - Global ( hlegius - Criando Solu&ccedil;&otilde;es)</title>
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

<div id="Layer1" style="position:absolute; left:15px; top:66px; width:675px; height:116px; z-index:1">
  <table width="674" height="115" border="0">
    <form name="form1" method="post" action="index.php?act=w.1a&log_sys=<?php print  $get; ?>">
      <tr> 
        <td width="243" background="imagens/skin_ad1.gif"><font color="#FFFFFF" size="-1" face="Verdana, Arial, Helvetica, sans-serif"><strong>Painel 
          de Administra&ccedil;&atilde;o Global</strong></font></td>
        <td width="421" background="imagens/skin_ad1.gif"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">&nbsp;</font></td>
      </tr>
      <tr> 
        <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Login:</font></td>
        <td> <font size="-2" face="Verdana, Arial, Helvetica, sans-serif"> 
          <input name="login" type="text" id="login" size="30" maxlength="15">
          </font></td>
      </tr>
      <tr> 
        <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Senha:</font></td>
        <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"> 
          <input name="senha" type="password" id="senha" size="30" maxlength="10">
          </font></td>
      </tr>
      <tr> 
        <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Grupo:</font></td>
        <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"> 
          <input type="text" name="textfield3" value="administradores" disabled>
          </font></td>
      </tr>
      <tr> 
        <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">&nbsp;</font></td>
        <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"> 
          <input type="submit" name="Submit" value="Logar!">
          </font></td>
      </tr>
    </form>
  </table>
</div>
<div id="Layer2" style="position:absolute; left:436px; top:199px; width:255px; height:25px; z-index:2"> 
  <table width="255" border="0">
    <tr>
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Desenvolvido por: 
        <a href="mailto:hlegius@hotmail.com">hlegius</a></font></td>
    </tr>
  </table>
</div>
<font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Para Logar no Painel de Controle 
global &eacute; necess&aacute;rio ser do Grupo administradores, caso n&atilde;o 
seja, feche esta janela e retorne ao sistema, pois qualquer tentativa de login 
ser&aacute; gravada em log. </font> 
</body>
</html>
