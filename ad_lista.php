<?php
include "config.php";
session_start("logando");
if(!(session_is_registered("login") and session_is_registered("senha") and session_is_registered("id") and session_is_registered("grp"))){
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
$total = mysql_query("SELECT count(*) as total FROM cadastro WHERE grp = 'administradores'");
$resulta = mysql_result($total,0,"total");
?>


<html>
<head>
<title>Painel de Administra&ccedil;&atilde;o hlegius ( Criando Solu&ccedil;&otilde;es )</title>
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
<div id="Layer2" style="position:absolute; left:155px; top:6px; width:550px; height:182px; z-index:4">
  <p align="center"><font size="-1" face="Verdana, Arial, Helvetica, sans-serif"><strong>Exibindo 
    as informa&ccedil;&otilde;es sobre a equipe da administra&ccedil;&atilde;o...</strong></font></p>
  <p><font size="-2" face="Verdana, Arial, Helvetica, sans-serif">Total de administradores: 
    <?php print $resulta; ?></font></p>
  <hr align="left" width="200">
  <font size="-2" face="Verdana, Arial, Helvetica, sans-serif">
<?php 
$listando = mysql_query("SELECT * FROM cadastro WHERE grp = 'administradores' ORDER by id");
if(mysql_num_rows($listando) > 0){
while($admin = mysql_fetch_array($listando)){
$ad_id = $admin['id'];
$ad_login = $admin['login'];
$ad_nome = $admin['nome'];
if($ad_id == 1){ print "<b>(usuário root)</b><br />";}
print "Nome: $ad_nome $root<br />Login: $ad_login<br /><hr width=200 align='left'>";
}}else{
print "Erro fatal!";
};


 ?><br>
  </font> </div>
</body>
</html>
