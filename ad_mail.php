<?php
include "config.php";
session_start("logando");
if(!(session_is_registered("login") and session_is_registered("senha") and session_is_registered("id") and session_is_registered("grp"))){
header("1ocation:index.php?act=a.20");
exit;
}
$total = mysql_query("SELECT count(*) as total FROM cadastro");
$total_user = mysql_result($total,0,"Total");
$get = $_GET['log_sys'];
$envia = $_POST['envia'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];
$mensagem = nl2br($mensagem);
if($_SESSION['id'] != $_GET['log_sys']){ 
$valor = "O usuário de ID: $id, tentou mudar o log_sys de: $id para $get, e o sistema o bloqueou.";
mail($email_root, "Acesso não autorizado", $valor, "FROM: sistema@servidor.com.br");
print "<center>Você não pode mudar o log_sys!</center>"; 
print "<center>Estamos deslogando você, e o administrador foi comunidado sobre a tal atitude!</center>";
print "<meta http-equiv='refresh' content=3;URL=index.php?act=a.100>";
exit;
}
if(($assunto == NULL) or ($mensagem == NULL)){
?>

<html>
<head>
<title>Painel de Administração</title>
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
<div id="Layer1" style="position:absolute; left:5px; top:19px; width:154px; height:217px; z-index:1"> 
  <table width="154" height="159" border="0">
    <tr> 
      <td><div align="center"><font size="-1" face="Verdana, Arial, Helvetica, sans-serif">Menu</font></div></td>
    </tr>
    <tr> 
      <td height="14"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href="index.php?act=pc.1a&log_sys=<?php print  $get; ?>" title="Página principal do Painel de administração">Home</a></font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href="index.php?act=gr.p2&log_sys=<?php print  $get; ?>" title="Mostra que se logou ao painel">Logs 
        ao painel</a></font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href="index.php?act=ad.ls&log_sys=<?php print  $get;?>" title="Mostra os seus administradores...">Listar 
        administradores</a></font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">--&gt;Membros</font></td>
    </tr>
    <tr> 
      <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href="index.php?act=me.bs&log_sys=<?php print  $get; ?>" title="Exibe algumas informações sobre seus cadastros">Total 
        de cadastros</a></font></td>
    </tr>
    <tr> 
      <td height="20"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href="index.php?act=ma.ko&log_sys=<?php print  $get; ?>" title="Envia e-mail para todos os seus usuários">Mala 
        Direta</a></font></td>
    </tr>
    <tr> 
      <td height="15"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href="index.php?act=grp.ad&log_sys=<?php print  $get; ?>" title="Edite dados dos usuários cadastrados no banco de dados">Editar 
        dados</a></font></td>
    </tr>
    <tr> 
      <td height="16"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href="index.php?act=pc.inf&log_sys=<?php print  $get; ?>" title="Informações Sobre o Sistema">Infos 
        do Sistema</a></font></td>
    </tr>
  </table>
  <table width="145" border="0">
    <tr> 
      <td height="15"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">&nbsp;--&gt;Deslogar</font></td>
    </tr>
    <tr> 
      <td height="14"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href="index.php?act=cb.6w&log_sys=<?php print  $get; ?>" title="Deslogar somente do Painel de Administração">Somente 
        do Pcontrole</a></font></td>
    </tr>
    <tr> 
      <td height="15"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"><a href="index.php?act=pc.3b&log_sys=<?php print  $get; ?>" title="Deslogar do Painel de Administração e da area pessoal">Do 
        sistema inteiro</a></font></td>
    </tr>
  </table>
</div>
<div id="Layer3" style="position:absolute; left:140px; top:6px; width:15px; height:275px; z-index:3"> 
  <table width="11" height="275" border="0">
    <tr> 
      <td background="imagens/skin_ad1.gif">&nbsp;</td>
    </tr>
  </table>
</div>
<div id="Layer2" style="position:absolute; left:155px; top:4px; width:565px; height:236px; z-index:4">
  <p align="center"><font size="-1" face="Verdana, Arial, Helvetica, sans-serif">Sistema 
    de Mala Direta (email em massa)</font></p>
  <table width="550" border="0">
    <form name="form1" method="post" action="<? $_SERVER['PHP_SELF'];?>">
      <tr> 
        <td width="138"><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Assunto 
          do email:</font></td>
        <td width="402"> <font size="-2" face="Verdana, Arial, Helvetica, sans-serif"> 
          <input name="assunto" type="text" id="assunto" size="50">
          </font></td>
      </tr>
      <tr> 
        <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Texto:</font></td>
        <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"> 
          <textarea name="mensagem" cols="44" rows="7" id="mensagem"></textarea>
          </font></td>
      </tr>
      <tr> 
        <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">&nbsp;</font></td>
        <td><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"> 
          <input name="envia" type="submit" id="envia" value="Enviar emails">
          </font></td>
      </tr>
    </form>
  </table>
  <p align="center"><font color="#FF0000" size="-2" face="Verdana, Arial, Helvetica, sans-serif">Obs:</font><font size="-2" face="Verdana, Arial, Helvetica, sans-serif"> 
    O envio poder&aacute; demorar, mesmo com conex&atilde;o banda larga, por isso 
    n&atilde;o atualize a p&aacute;gina durante o envio, pois sen&atilde;o ser&aacute; 
    enviado os e-mails v&aacute;rias vezes.</font></p>
</div>
</body>
</html>
<?php
}
else{
$mysql_prepara = mysql_query("SELECT * FROM cadastro");
	if(mysql_num_rows($mysql_prepara) > 1){
		while($e_mail = mysql_fetch_array($mysql_prepara)){
		$emails = $e_mail['email'];
		$nome   = $e_mail['nome'];
		mail($emails, $assunto, $mensagem, "FROM:$email_root");
				}
		print "<center>E-mail enviado com sucesso para <b>$total_user usuários</b>.</center>";
		print "<meta http-equiv='refresh' content=3;URL=index.php?act=pc.1a&log_sys=$get>";
		print "<title>Mala direta enviada com sucesso!</title>";
		mysql_free_result($mysql_prepara);
	}
	else{ 
	print "<center>Não há usuários suficientes para completar essa ação!</center>";
	print "<meta http-equiv='refresh' content=2;URL=index.php?act=pc.1a&log_sys=$get>";
	print "<title>Erro ao enviar a mala direta...</title>";
		};
};
?>